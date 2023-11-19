<?php
class MM_MonacoEditor_Block_Init extends Mage_Core_Block_Template
{
    /**
     * return json encoded array of textareas id and language
     * @return string
     */
    public function getTextAreas()
    {
        $textareas = [];
        $controller = Mage::app()->getRequest()->getControllerName();

        switch($controller){
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
        return Zend_Json::encode($textareas,false,array('enableJsonExprFinder'=>true));
    }

    /**
     * return true if wysiwyg is enabled by default
     *
     * @return boolean
     */
    public function isWysiwygEnabledByDefault()
    {
        return Mage::getStoreConfig('cms/wysiwyg/enabled') == 'enabled';
    }
}