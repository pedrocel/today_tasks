/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
//config.language = 'fr';
	// config.uiColor = '#AADC6E';
	 config.toolbarGroups = [
		 { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		 { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		 { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		 { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		 { name: 'styles', groups: [ 'styles' ] },
		 { name: 'colors', groups: [ 'colors' ] },
		 { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		 { name: 'forms', groups: [ 'forms' ] },
		 { name: 'insert', groups: [ 'insert' ] },
		 { name: 'tools', groups: [ 'tools' ] },
		 '/',
		 { name: 'links', groups: [ 'links' ] },
		 '/',
		 { name: 'others', groups: [ 'others' ] },
		 { name: 'about', groups: [ 'about' ] }
	 ];

	 config.removeButtons = 'Placeholder,About,Source,Save,NewPage,Templates,Form,Checkbox,Radio,TextField,Textarea,Select,ImageButton,HiddenField,Button,ShowBlocks,Link,Unlink,Anchor,Image,Flash,Smiley,SpecialChar,PageBreak,Iframe';

};
