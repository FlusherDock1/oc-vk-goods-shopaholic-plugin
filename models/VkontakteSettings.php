<?php namespace Lovata\VKontakteShopaholic\Models;

use Lang;
use October\Rain\Database\Traits\Validation;

use Lovata\Toolbox\Models\CommonSettings;

/**
 * Class VkontakteSettings
 *
 * @package Lovata\VKontakteShopaholic\Models
 * @author  Sergey Zakharevich, s.zakharevich@lovata.com, LOVATA Group
 *
 * @mixin \October\Rain\Database\Builder
 * @mixin \Eloquent
 * @mixin \System\Behaviors\SettingsModel
 */
class VkontakteSettings extends CommonSettings
{
    use Validation;

    const SETTINGS_CODE = 'lovata_shopaholic_vkontakte_export_settings';

    const CODE_OFFER = 'offer';
    const CODE_PRODUCT = 'product';

    /**
     * @var string
     */
    public $settingsCode = 'lovata_shopaholic_vkontakte_export_settings';

    /**
     * @var array
     */
    public $rules = [
        'community_id'      => 'required|integer',
        'access_token_user' => 'required',
    ];

    /**
     * @var array
     */
    public $attributeNames = [
        'community_id'      => 'lovata.tovkontakteshopaholic::lang.field.community_id',
        'access_token_user' => 'lovata.tovkontakteshopaholic::lang.field.access_token_user',
    ];

    /**
     * Get model potions
     *
     * @return array
     */
    public function getGetImagesFromOptions()
    {
        return [
            self::CODE_OFFER   => Lang::get('lovata.shopaholic::lang.field.offer'),
            self::CODE_PRODUCT => Lang::get('lovata.toolbox::lang.field.product'),
        ];
    }
}
