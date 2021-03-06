<?php
/**
 * Sentry plugin for Craft CMS 3.x
 *
 * Error tracking that helps developers monitor and fix crashes in real time. Iterate continuously. Boost efficiency. Improve user experience.
 *
 * @link      https://github.com/lukeyouell
 * @copyright Copyright (c) 2017 Luke Youell
 */

namespace lukeyouell\sentry\models;

use lukeyouell\sentry\Sentry;

use Craft;
use craft\base\Model;

/**
 * @author    Luke Youell
 * @package   Sentry
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $enabled = true;

    /**
     * @var string
     */
    public $authToken = null;

    /**
     * @var string
     */
    public $project = null;

    /**
     * @var string
     */
    public $clientDsn = null;

    /**
     * @var string
     */
    public $excludedCodes = null;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled'], 'boolean'],
            [['authToken', 'project', 'clientDsn', 'excludedCodes'], 'string'],
            [['authToken'], 'required']
        ];
    }
}
