<?php
class MM_MonacoEditor_Model_Observer {

    /**
     * Disable WYSIWYG editor for pages and static blocks
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function disableWysywygEditor(Varien_Event_Observer $observer)
	{
        if (!$this->_checkEntityisDisabled()) {
            return;
        }
	    $config = $observer->getConfig();
        $config->setEnabled(false);
    }

    /**
     * Disable WYSIWYG editor for pages and static blocks
     *
     * @return boolean
     */
    private function _checkEntityisDisabled()
    {
        $controller = Mage::app()->getRequest()->getControllerName();

        switch($controller){
            case 'cms_page':
                return in_array(Mage::app()->getRequest()->getParam('page_id'), Mage::helper('mm_monacoeditor')->getDisabledWysiwygPages());
                break;
            case 'cms_block':
                return in_array(Mage::app()->getRequest()->getParam('block_id'), Mage::helper('mm_monacoeditor')->getDisabledWysiwygBlocks());
                break;
        }
        return false;
    }
}