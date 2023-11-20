<?php
final class MM_MonacoEditor_Model_Observer
{
    public function disableWysywygEditor(Varien_Event_Observer $observer): void
    {
        if (! $this->_shouldEntityBeDisabled()) {
            return;
        }

        $config = $observer->getConfig();
        $config->setEnabled(false);
    }

    private function _shouldEntityBeDisabled(): bool
    {
        $controller = Mage::app()->getRequest()->getControllerName();

        switch ($controller) {
            case 'cms_page':
                return in_array(Mage::app()->getRequest()->getParam('page_id'), Mage::helper('mm_monacoeditor')->getDisabledWysiwygPages());
            case 'cms_block':
                return in_array(Mage::app()->getRequest()->getParam('block_id'), Mage::helper('mm_monacoeditor')->getDisabledWysiwygBlocks());
        }

        return false;
    }
}