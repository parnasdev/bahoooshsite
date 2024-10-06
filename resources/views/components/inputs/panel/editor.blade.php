<div {{ $attributes['class'] }} x-data="{
    editor: null,
    init() {
       tinymce.init({
            selector: '#' + $refs.editor.id,
            placeholder: @js($attributes['placeholder'] ?? ''),
            width: '100%',
            height: @js($attributes['height'] ?? 500),
            theme: 'silver',
            menubar: true,
            branding: false,
            skin: 'oxide',
            toolbar1: 'undo redo | formatSelect | bold italic blockquote strikethrough underline forecolor backcolor | numlist bullist | alignright aligncenter alignleft alignjustify | rtl ltr | link unlink',
            toolbar2: 'fontsizeselect | indent outdent | cut copy paste pastetext | charmap image media responsivefilemanager table emoticons hr | searchreplace preview code fullscreen help editormode',
            plugins: 'lists,advlist,directionality,link,paste,charmap,table,emoticons,codesample,preview,code,fullscreen,help,hr,nonbreaking,searchreplace,visualblocks,visualchars,autolink,image,media',
            advlist_bullet_styles: 'square,circle,disc',
            advlist_number_styles: 'lower-alpha,lower-roman,upper-alpha,upper-roman',
            help_tabs: ['shortcuts'],
            fontsize_formats: '6pt 7pt 8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 17pt 18pt 19pt 20pt 21pt 22pt 23pt 24pt 25pt 26pt 27pt 28pt 29pt 30pt 32pt 34pt 36pt 40pt',
            lineheight_formats: '1pt 2pt 3pt 4pt 5pt 6pt 7pt 8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 36pt 38pt 40pt 42pt 44pt 46pt 48pt 50pt 60pt 70pt 80pt 100pt',
            directionality: 'rtl',
            language: 'fa_IR',
            convert_urls: false,
            setup: function(editor) {
                editor.on('init', function() {
                    let content = $wire.get('{{$attributes->wire('model')->value}}')

                    if (content !== null)
                        editor.setContent(content);
                });
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    $wire.set('{{$attributes->wire('model')->value}}' , editor.getContent())

                });
            },
            file_picker_callback(callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url: @js(route('panel.fileManger.tinymce5')),
                    title: 'مدیریت فایل ها',
                    width: x * 0.8,
                    height: y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            }
       });

       this.editor = tinymce.activeEditor;

    },
    setContent(e) {
        let {tagId , content} = e.detail;
        if (tagId === $refs.editor.id) {
            this.editor.setContent(content)
        }
    }
}" @set-editor-content.window="setContent" wire:ignore>
    @if($label ?? false)
        <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
            <label class="d-flex f-14 text-63">
                {{$label}}
                <div class="rx-title title-input pb-10">
                    <div class="p-rx">
                        <div class="rx-border-rectangle-after label-input"></div>
                    </div>
                </div>
            </label>
        </div>
    @endif
    <!-- text -->
    <textarea id="{{ $attributes['id'] }}" x-ref="editor"></textarea>


    @error($attributes->wire('model')->value)
    <span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
    @enderror
</div>
