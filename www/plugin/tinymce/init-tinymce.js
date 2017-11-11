tinymce.init({
    /* replace textarea having class .tinymce with tinymce editor */
    selector: "textarea.tinymce",
    language: 'cs',
    /* theme of the editor */
    theme: "modern",
    skin: "darkskin",

    /* width and height of the editor */
    width: "100%",
    height: 600,

    /* display statusbar 
     statubar: true,
     
     /* plugin 
     plugins: [
     "advlist autolink link lists charmap print preview hr anchor pagebreak",
     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
     "save table contextmenu directionality emoticons template paste textcolor"
     ],
     
     /* toolbar 
     toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
     */

    plugins: "codesample save code image media",
    toolbar: "undo redo | fontsizeselect | alignleft aligncenter alignright alignjustify | image media | codesample | preview",
    fontsize_formats: "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt 36pt",
    
    codesample_languages: [
        {text: 'C#', value: 'csharp'},
        {text: 'HTML/XML', value: 'markup'}
    ],
    image_class_list: [
        {title: 'CSS', value: 'content-image'}
    ],
    /* style */
    style_formats: [
        {title: "Blocks", items: [
                {title: "Paragraph", format: "p"},
                {title: "Blockquote", format: "blockquote"},
                {title: "Div", format: "div"},
                {title: "Pre", format: "pre"}
            ]}
    ]
});

