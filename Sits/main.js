var editor = grapesjs.init({
    showOffsets: 1,
    noticeOnUnload: 0,
    container: '#gjs',
    height: '100%',
    fromElement: true,
    storageManager: { autoload: 0 },
    plugins: [myPlugin,'gjs-navbar','gjs-component-countdown',
                        'grapesjs-tabs','grapesjs-lory-slider',
                        'grapesjs-custom-code',
                        'grapesjs-tooltip',
                        'grapesjs-plugin-forms',myPluginForm,
                        ],
    pluginsOpts: { 
        'gjs-navbar': {},
        'gjs-component-countdown':{},
        'grapesjs-tabs':{tabsBlock:{category:'Extra'}},
        'grapesjs-lory-slider':{sliderBlock:{category:'Extra'}},
        'grapesjs-custom-code':{},
        'grapesjs-tooltip':{},
        'grapesjs-plugin-forms':{}
       
    },
    styleManager : {
      sectors: [{
          name: 'General',
          open: false,
          buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
      },{
          name: 'Flex',
          open: false,
          buildProps: ['flex-direction', 'flex-wrap', 'justify-content', 'align-items', 'align-content', 'order', 'flex-basis', 'flex-grow', 'flex-shrink', 'align-self']
      },{
          name: 'Dimension',
          open: false,
          buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
      },{
          name: 'Typography',
          open: false,
          buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-shadow'],
      },{
          name: 'Decorations',
          open: false,
          buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
      },{
          name: 'Extra',
          open: false,
          buildProps: ['transition', 'perspective', 'transform'],
      }
      ],
  },
});

  editor.Panels.addButton('options', [{
    id: 'undo',
    className: 'fa fa-undo icon-undo',
    command: function (editor, sender) {
        sender.set('active', 0);
        editor.UndoManager.undo(1);
    },
    attributes: {
        title: 'Undo (CTRL/CMD + Z)'
    }
},
{
    id: 'redo',
    className: 'fa fa-repeat icon-redo',
    command: function (editor, sender) {
        sender.set('active', 0);
        editor.UndoManager.redo(1);
    },
    attributes: {
        title: 'Redo (CTRL/CMD + SHIFT + Z)'
    }
},
{
    id: 'clear-local',
    className: 'fa fa-close',
    command: function () {
        if (confirm('Reset to original?')) {
            localStorage.setItem('gjs-assets', '');
            localStorage.setItem('gjs-components', '');
            localStorage.setItem('gjs-html', '');
            localStorage.setItem('gjs-css', '');
            localStorage.setItem('gjs-styles', '');
            location.reload();
        }
    },
    attributes: {
        title: 'Reset'
    }
},
{
    id: 'save-project',
    className: 'fa fa-save',
    command: function (editor, sender) {
        sender.set('active', 0);
        alert('No database for this version but your work is automatically saved in localstorage.');
    },
    attributes: {
        title: 'github'
    }
}
]);