<?php
class MM_MonacoEditor_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_CONFIG_TAILWINDCSS_ENABLED = 'cms/mm_monacoeditor/tailwindcss';
    const XML_PATH_CONFIG_TAILWINDCSS_PREFIX_ENABLED = 'cms/mm_monacoeditor/tailwindcss_prefix';
    const XML_PATH_CONFIG_TAILWINDCSS_PREFIX = 'cms/mm_monacoeditor/tailwindcss_prefix_value';
    const XML_PATH_CONFIG_DISABLE_WYSIWYG_BLOCKS = 'cms/mm_monacoeditor/disable_wysywyg_static_block';
    const XML_PATH_CONFIG_DISABLE_WYSIWYG_PAGES = 'cms/mm_monacoeditor/disable_wysywyg_static_page';

    public function isTailwindcssEnabled(int $storeId = null): bool
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_TAILWINDCSS_ENABLED, $storeId);
    }

    public function isTailwindcssPrefixEnabled(int $storeId = null): bool
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_TAILWINDCSS_PREFIX_ENABLED, $storeId);
    }

    public function getTailwindcssPrefix(int $storeId = null): string
    {
        return Mage::getStoreConfig(self::XML_PATH_CONFIG_TAILWINDCSS_PREFIX, $storeId);
    }

    /** @return array<string> */
    public function getDisabledWysiwygBlocks(int $storeId = null): array
    {
        $disabledEntityIds = Mage::getStoreConfig(self::XML_PATH_CONFIG_DISABLE_WYSIWYG_BLOCKS, $storeId);
        if (!$disabledEntityIds) {
            return [];
        }

        return explode(',', $disabledEntityIds);
    }

    /** @return array<string> */
    public function getDisabledWysiwygPages(int $storeId = null): array
    {
        $disabledEntityIds = Mage::getStoreConfig(self::XML_PATH_CONFIG_DISABLE_WYSIWYG_PAGES, $storeId);
        if (!$disabledEntityIds) {
            return [];
        }

        return explode(',', $disabledEntityIds);
    }
}