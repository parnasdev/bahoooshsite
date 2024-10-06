@props(['scss' => ''])
<style>
    @php
        use ScssPhp\ScssPhp\Compiler;

        $compiler = new Compiler();
        $compiler->setOutputStyle('compressed');
        echo $compiler->compileString($scss ?? '')->getCss();
    @endphp
</style>
