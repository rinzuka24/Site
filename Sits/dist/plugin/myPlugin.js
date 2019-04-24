function myPlugin(editor){
    editor.BlockManager.add(
        'sct', {
        label: 'Section',
        category: 'Basic',
        attributes: {
            class: 'gjs-fonts gjs-f-b1'
        },
        content: '<div class="section" data-gjs-droppable=".cell" data-gjs-custom-name="Section">'
        +'<div class="container" data-gjs-draggable=".row" data-gjs-custom-name="container">'
        +'</div>'
        +'</div><style>.container:empty{width: 90%;padding: 25px 0;margin: 0 auto;max-width: 1200px;} .section{padding:50px 0}</style>'
    });

    editor.BlockManager.add('grid',{
        label: 'Grid',
        category: 'Basic',
        attributes: {
            class: 'gjs-fonts gjs-f-b3'
        },
        content: '<div class="row" data-gjs-droppable=".cell" data-gjs-custom-name="Row">'
        +'<div class="col m4" data-gjs-draggable=".row" data-gjs-custom-name="m4">'
        +'</div>'
        +'<div class="col m4" data-gjs-draggable=".row" data-gjs-custom-name="m4"></div>'
        +'<div class="col m4" data-gjs-draggable=".row" data-gjs-custom-name="m4"></div>'
        +'</div><style>.col:empty{height:75px} .m4{width:33.33333%;float:left}</style>'
    });
    editor.BlockManager.add('divider',{
        label: 'Divider',
        category: 'Basic',
        attributes: {
            class: 'gjs-fonts gjs-f-divider'
        },
        content: '<div class="divider" data-gjs-droppable=".cell" data-gjs-custom-name="divider">'
        + '</div><style>.divider:empty{height: 3px;margin: 10px;background-color: rgba(0,0,0,0.05);}</style>'
    });
    editor.BlockManager.add('header',{
        label: 'Header',
        category: 'Basic',
        attributes: {
            class: 'fa fa-header'
        },
        content: '<h1 class="header" data-gjs-droppable=".cell" data-gjs-custom-name="header">Insert your header text here'
         +'</h1><style>.header{cursor: text;}</style>',
    });
    editor.BlockManager.add('txt',{
        label: 'Text',
        category: 'Basic',
        attributes: {
            class: 'gjs-fonts gjs-f-text'
        },
        content: '<p class="txt" data-gjs-droppable=".cell" data-gjs-custom-name="Text">Insert your text here'
         +'</p><style>.txt{padding: 10px; max-width: 100%;}</style>',
    });
    editor.BlockManager.add('link',{
         label: 'Link',
        category: 'Basic',
        attributes: {
            class: 'fa fa-link'
        },
        content: {
            type: 'link',
            content: 'Link',
            style: {
                padding: '10px'
            },
        },
    });
    editor.BlockManager.add('image',{
        label: 'Image Block',
        category: 'Basic',
        attributes: {
            class: 'gjs-fonts gjs-f-image'
        },
        content: {
            type: 'image',
            activeOnRender: 1,
            style:{
                width:'100%'
            }
        },
    });
    editor.BlockManager.add('res-image',{
        label: ' image',
        category: 'Basic',
        content: {
            type: 'image',
            activeOnRender: 1,
            style:{
                width:'100px'
            }
        },
        attributes: {
            class: 'gjs-fonts gjs-f-image'
        }
    });
    editor.BlockManager.add('video',{
        label: 'Video',
        category: 'Basic',
        attributes: {
            class: 'fa fa-youtube-play'
        },
        content: {
            type: 'video',
            src: 'img/video2.webm',
            style: {
                height: '350px',
                width: '615px',
            }
        },
    });
    editor.BlockManager.add('map',{
        label: 'Map',
        category: 'Basic',
        attributes: {
            class: 'fa fa-map-o'
        },
        content: {
            type: 'map',
            style: {
                height: '350px'
            }
        },
    });
    editor.BlockManager.add('link-block',{
        label: 'Link Block',
        category: 'Extra',
        attributes: {
            class: 'fa fa-link'
        },
        content: '<a data-gjs-type="link" class="link-block"></a>'
        +'<style>.link-block{min-height:50px;min-width:50px;padding:5px;display:inline-block}</style>'
    });
    // editor.BlockManager.add('radio',{
    //     label: 'Radio',
    //     category: 'Forms',
    //     attributes: {
    //         class: 'fa fa-dot-circle-o'
    //     },
    //     content: '<div class="row">'
    //     +'<div class="input-field col s12">'
    //     +'<p>'
    //     +'<input name="group1" type="radio" id="test1"/>'
    //     +'<label for="test1">Red</label>'
    //     +'</p>'
    //     +'<p>'
    //     +'<input name="group1" type="radio" id="test2"/>'
    //     +'<label for="test2">Yellow</label>'
    //     +'</p>'
    //     +'<p>'
    //     +'<input class="with-gap" name="group1" type="radio" id="test3" />'
    //     +'<label for="test3">Green</label>'
    //     +'</p>'
    //     +'<p>'
    //     +'<input name="group1" type="radio" id="test4" disabled="disabled"/>'
    //     +'<label for="test4">Brown</label>'
    //     +'</p>'
    //     +'</div>'
    //     +'</div>'
    // });
    // editor.BlockManager.add('checkbox',{
    //     label: 'Checkbox',
    //     category: 'Forms',
    //     attributes: {
    //         class: 'fa fa-check-square-o'
    //     },
    //     content: '<div class="row">'
    //     +'<div class="input-field col s12">'
    //     +'<p>'
    //     +'<input type="checkbox" id="test5" />'
    //     +'<label for="test5">Red</label>'
    //     +'</p>'
    //     +'<p>'
    //     +'<input type="checkbox" id="test6" checked="checked" />'
    //     +'<label for="test6">Yellow</label>'
    //     + '</p>'
    //     +'</div>'
    //     +'</div>'
    // });
    // editor.BlockManager.add('',{});
  }

  function myPluginForm(editor){
    editor.BlockManager.add('radio',{
        label: 'Radio',
        category: 'Forms',
        attributes: {
            class: 'fa fa-dot-circle-o'
        },
        content: '<div class="row">'
        +'<div class="input-field col s12">'
        +'<p>'
        +'<input name="group1" type="radio" id="test1"/>'
        +'<label for="test1">Red</label>'
        +'</p>'
        +'<p>'
        +'<input name="group1" type="radio" id="test2"/>'
        +'<label for="test2">Yellow</label>'
        +'</p>'
        +'<p>'
        +'<input class="with-gap" name="group1" type="radio" id="test3" />'
        +'<label for="test3">Green</label>'
        +'</p>'
        +'<p>'
        +'<input name="group1" type="radio" id="test4" disabled="disabled"/>'
        +'<label for="test4">Brown</label>'
        +'</p>'
        +'</div>'
        +'</div>'
    });
    editor.BlockManager.add('checkbox',{
        label: 'Checkbox',
        category: 'Forms',
        attributes: {
            class: 'fa fa-check-square-o'
        },
        content: '<div class="row">'
        +'<div class="input-field col s12">'
        +'<p>'
        +'<input type="checkbox" id="test5" />'
        +'<label for="test5">Red</label>'
        +'</p>'
        +'<p>'
        +'<input type="checkbox" id="test6" checked="checked" />'
        +'<label for="test6">Yellow</label>'
        + '</p>'
        +'</div>'
        +'</div>'
    });
  }