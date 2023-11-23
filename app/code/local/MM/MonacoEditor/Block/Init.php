<?php
class MM_MonacoEditor_Block_Init extends Mage_Core_Block_Template
{
    /**
     * return json encoded array of textareas id and language
     */
    public function getTextAreas(): string
    {
        $textareas = [];
        $controller = Mage::app()->getRequest()->getControllerName();

        switch ($controller) {
            case 'cms_page':
                $textareas = [
                    [
                        'id' => 'page_content',
                        'language' => 'html'
                    ],
                    [
                        'id' => 'page_layout_update_xml',
                        'language' => 'xml'
                    ],
                    [
                        'id' => 'page_custom_layout_update_xml',
                        'language' => 'xml'
                    ],
                ];
                break;
            case 'cms_block':
                $textareas = [
                    [
                        'id' => 'block_content',
                        'language' => 'html'
                    ]
                ];
                break;
        }

        return Zend_Json::encode($textareas, false, ['enableJsonExprFinder' => true]);
    }

    public function isWysiwygEnabledByDefault(): bool
    {
        return Mage::getStoreConfig('cms/wysiwyg/enabled') === 'enabled';
    }

    public function getEditorJsUrl(string $fileName = ''): string
    {
        return Mage::getStoreConfig('cms/mm_monacoeditor/editorjs_url_prefix') . $fileName;
    }
}