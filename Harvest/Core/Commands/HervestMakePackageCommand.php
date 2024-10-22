<?php

namespace Harvest\Core\Commands;

use Harvest\Core\Facades\Package;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Laravel\Prompts\TextPrompt;
use Symfony\Component\Finder\SplFileInfo;
use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

class HervestMakePackageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'harvest:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Harvest Package';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $packageName = ucfirst(strtolower(text(
            'What is your Package Name?',
            'E.g Cart',
            required: true,
            validate: [
                'required' , 'string' , 'max:20'
            ]
        )));

        $packageType = select(
            "choice Package Type:",
            ['package' , 'template'],
            'package'
        );

        if (! $this->checkPackageExist($packageName)) {
            return false;
        }

         (new Filesystem)->copyDirectory(package_path('Core' , 'Commands/stubs/package') , base_path('/Harvest/' . $packageName));


        $files = (new Filesystem)->allFiles(package_path($packageName , ''));


        foreach ($files as $file) {
            if ($file->getRelativePath() == 'Providers') {
                $this->createProvider($file , $packageName);
            }


            if ($file->getRelativePath() == '') {
                match ($file->getRelativePathname()) {
                    'composer.stub' => $this->createComposer($file , $packageName),
                    'register.stub' => $this->createRegister($file , $packageName , $packageType),
                };
            }

            if ($file->getRelativePath() == 'config') {
                rename($file->getPathname() , str_replace('config.stub' , 'config.php' , $file->getPathname()));

            }

            if ($file->getRelativePath() == 'routes') {
                $this->createRoutes($file , $packageName);
            }
        }

    }

    public function checkPackageExist($name) : bool
    {
        if ($name == 'Core') {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Package is reserved:</> {$name}");
            return false;
        }

        if (!Package::get()->where('name' , $name)->isEmpty()) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS-IE-TOOTLES </> 😳 \n");
            $this->line("<fg=red;options=bold>Package already exists:</> {$name}");
            return false;
        }

        return  true;
    }

    public function createProvider(SplFileInfo $file , $packageName)
    {
        $path = file_get_contents($file->getPathname());

        $data = preg_replace(
            ['/\[namespace\]/', '/\[class\]/', '/\[package_upper\]/' , '/\[package_lower\]/'],
            [$this->getClassNamespace($file->getRelativePath() , $packageName), $packageName.'ServiceProvider', $packageName , strtolower($packageName)],
            $path,
        );

        file_put_contents($file->getPathname() , $data);

        rename($file->getPathname() , str_replace('ServiceProvider.stub' , $packageName.'ServiceProvider.php' , $file->getPathname()));
    }

    public function getClassNamespace($path , $packageName)
    {
        return "Harvest\\{$packageName}\\{$path}";
    }

    public function createComposer(SplFileInfo $file , $packageName) {
        $path = file_get_contents($file->getPathname());

        $data = preg_replace(
            ['/\[lower_package_name\]/', '/\[upper_package_name\]/'],
            [strtolower($packageName) , $packageName],
            $path,
        );

        file_put_contents($file->getPathname() , $data);

        rename($file->getPathname() , str_replace('composer.stub' , 'composer.json' , $file->getPathname()));
    }

    public function createRegister(SplFileInfo $file , $packageName , $packageType) {
        $path = file_get_contents($file->getPathname());

        $data = preg_replace(
            ['/\[name\]/', '/\[type\]/', '/\[upper_name\]/'],
            [strtolower($packageName) , $packageType , $packageName],
            $path,
        );

        file_put_contents($file->getPathname() , $data);

        rename($file->getPathname() , str_replace('register.stub' , 'register.json' , $file->getPathname()));
    }

    public function createRoutes(SplFileInfo $file , $packageName) {
        $path = file_get_contents($file->getPathname());

        $data = preg_replace(
            ['/\[packageName\]/'],
            [strtolower($packageName)],
            $path,
        );

        file_put_contents($file->getPathname() , $data);

        rename($file->getPathname() , str_replace('web.stub' , 'web.php' , $file->getPathname()));
    }
}
