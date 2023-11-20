<?php
class MM_MonacoEditor_Helper_Data extends Mage_Core_Helper_Abstract
{

    const XML_PATH_CONFIG_TAILWINDCSS_ENABLED = 'cms/mm_monacoeditor/tailwindcss';
    const XML_PATH_CONFIG_TAILWINDCSS_PREFIX_ENABLED = 'cms/mm_monacoeditor/tailwindcss_prefix';
    const XML_PATH_CONFIG_TAILWINDCSS_PREFIX = 'cms/mm_monacoeditor/tailwindcss_prefix_value';
    const XML_PATH_CONFIG_DISABLE_WYSIWYG_BLOCKS = 'cms/mm_monacoeditor/disable_wysywyg_static_block';
    const XML_PATH_CONFIG_DISABLE_WYSIWYG_PAGES = 'cms/mm_monacoeditor/disable_wysywyg_static_page';

    /**
     * return true if tailwindcss is enabled
     *
     * @param int $storeId
     * @return boolean
     */
    public function isTailwindcssEnabled($storeId = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_TAILWINDCSS_ENABLED, $storeId);
    }

    /**
     * return true if tailwindcss prefix is enabled
     *
     * @param int $storeId
     * @return boolean
     */
    public function isTailwindcssPrefixEnabled($storeId = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_TAILWINDCSS_PREFIX_ENABLED, $storeId);
    }

    /**
     * return tailwindcss prefix value
     * @return string
     */    
    public function getTailwindcssPrefix($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_CONFIG_TAILWINDCSS_PREFIX, $storeId);
    }

    /**
     * return disabled wysiwyg blocks
     *
     * @param int $storeId
     * @return array
     */
    public function getDisabledWysiwygBlocks($storeId = null)
    {
        $disabledEntityIds = Mage::getStoreConfig(self::XML_PATH_CONFIG_DISABLE_WYSIWYG_BLOCKS, $storeId);
        if (!$disabledEntityIds) {
            return [];
        }
        $disabledEntityIds = explode(',', $disabledEntityIds);
        return $disabledEntityIds;
    }

    /**
     * return disabled wysiwyg pages
     *
     * @param int $storeId
     * @return array
     */
    public function getDisabledWysiwygPages($storeId = null)
    {
        $disabledEntityIds = Mage::getStoreConfig(self::XML_PATH_CONFIG_DISABLE_WYSIWYG_PAGES, $storeId);
        if (!$disabledEntityIds) {
            return [];
        }
        $disabledEntityIds = explode(',', $disabledEntityIds);    
        return $disabledEntityIds;
    }

}