@extends('layout.app')
@section('content')
    <h1 id="editor">Editor</h1>
    @push('scripts')
        <script src="https://cdn.scaleflex.it/plugins/filerobot-image-editor/3/filerobot-image-editor.min.js"/></script>
    @@endpush
    <script>
    let editor = document.querySelector('#editor');

    editor.addEventListener('click' , () => {
        const ImageEditor = new window.FilerobotImageEditor();

        ImageEditor.open(
            "https://scaleflex.airstore.io/demo/stephen-walker-unsplash.jpg"
        );
    });


    </script>
@endsection
