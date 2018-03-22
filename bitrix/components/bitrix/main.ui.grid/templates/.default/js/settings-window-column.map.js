{"version":3,"sources":["settings-window-column.js"],"names":["BX","namespace","Grid","SettingsWindowColumn","parent","node","this","label","checkbox","editButton","settings","default","defaultTitle","state","init","prototype","updateState","bind","getEditButton","proxy","onEditButtonClick","event","stopPropagation","isEditEnabled","disableEdit","enableEdit","setState","getState","selected","isSelected","title","getTitle","restoreState","select","unselect","setTitle","getId","getNode","dataset","name","getLabel","innerText","getDefaultTitle","isEdited","getSettings","columns","getParam","isDefault","restore","Utils","getByTag","getCheckbox","getBySelector","getByClass","get","contentEditable","disabled","adjustCaret","isContentEditable","checked","range","document","createRange","selection","window","getSelection","elementTextLength","length","textNodes","childNodes","lastTextNode","setStart","setEnd","collapse","removeAllRanges","addRange","fireEvent"],"mappings":"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","file":""}