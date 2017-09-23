/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */


CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    // config.extraPlugins = 'imageuploader';
    // config.extraPlugins = 'youtube';
    config.filebrowserBrowseUrl = '/assets/global/plugins/ckfinder/ckfinder.html';
    
    config.filebrowserImageBrowseUrl = '/assets/global/plugins/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = '/assets/global/plugins/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = '/assets/global/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = '/assets/global/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = '/assets/global/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
