<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use app\components\Highlight as HL;

/* @var $this yii\web\View */
$this->title = 'Getting started';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container main">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                Introductory notes here..
            </p>
        </div>
    </div>
    <div class="timeline">
        <div class="row">
            <div class="visible-sm visible-xs">
                <img class="img-circle img-thumbnail img-responsive center-block" width=250 src="/image/tour/composer.png" alt="">
            </div>
            <div class="col-lg-8 col-xs-12">
                <div class="media timeline-item">
                    <div class="media-body">
                        <h2 class="media-heading">1) Composer</h2>
                        <p>
                            If you do not already have <a href="https://getcomposer.org/">Composer</a> installed, you need to install it, because Yii uses it
                            for neat things, from dependency management to project generation.
                        </p>
                        <p>
                            You also need to install the composer asset plugin globally, as it is used by the Yii composer project templates to handle Bower and NPM repositories:
                        </p>
<?php HL::begin(['language' => 'bash']); ?>
composer global require "fxp/composer-asset-plugin:~1.1.0"
<?php HL::end(); ?>
                        <p>
                            You only need to install that plugin once, and not for each project, because you installed it globally.
                        </p>
                        <p>
                            For detailed instructions, click the following button to open up an informative modal window:
                        </p>

<?php HL::begin(['capture' => true]); ?>
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
<?php $hl_composer_install = HL::end(); ?>
<?php HL::begin(['capture' => true]); ?>
composer global require "fxp/composer-asset-plugin:~1.1.0"
<?php $hl_fxp_install = HL::end(); ?>


                            <p>
                                <?php Modal::begin(['header' => '<h2>Composer Installation</h2>',
                                    'id' => 'composer_install',
                                    'toggleButton' => ['label' => 'View detailed instructions.'],
                                    'closeButton' =>  ['label' => 'Close'],
                                    'clientOptions' => ['backdrop' => false],
                                    ]); ?>
                                <p>On Linux and Mac OS X, you'll run the following commands:</p>
                                <?= $hl_composer_install->captured; ?>

                                <p>On Windows, you'll download and run <a href="https://getcomposer.org/Composer-Setup.exe">Composer-Setup.exe</a>.</p>
                                <p>Please refer to the <a href="https://getcomposer.org/doc/">Composer Documentation</a> if you encounter any
                                problems or want to learn more about Composer usage.</p>
                                <p>If you had Composer already installed before, make sure you use an up to date version. You can update Composer
                                by running <code>composer self-update</code>.</p>
                                <p>
                                    With Composer installed, you need to install the composer asset plugin:
                                </p>
                                <?= $hl_fxp_install->captured; ?>
                                <p>
                                    That command installs the <a href="https://github.com/francoispluchino/composer-asset-plugin/">composer asset plugin</a>
                                    which allows managing bower and npm package dependencies through Composer. You only need to run this command
                                    once for all.
                                </p>
                                <hr>
                                <p class="text-muted">
                                    Taken from <a href="/doc/guide/2.0/en/start-installation#installing-via-composer">Guide - Installation - Installing via Composer</a>
                                </p>
                                <?php Modal::end(); ?>
                            </p>
                    </div>
                    <div class="media-right media-top hidden-sm hidden-xs" id="composer-img">
                        <img class="media-object img-circle img-thumbnail" src="/image/tour/composer.png" alt="">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="visible-sm visible-xs">
                <img class="img-circle img-thumbnail img-responsive center-block" width=250 src="/image/tour/project-install.png" alt="">
            </div>
            <div class="col-lg-8 col-lg-offset-4">
                <div class="media timeline-item">
                    <div class="media-left media-top hidden-sm hidden-xs">
                        <img class="img-circle media-object img-thumbnail" src="/image/tour/project-install.png" alt="">
                        <div class="line"></div>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">2) Basic project template</h2>
<?php HL::begin(['language' => 'bash']); ?>
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
<?php HL::end(); ?>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="visible-sm visible-xs">
                <img class="img-circle img-thumbnail img-responsive center-block" width=250 src="/image/tour/start-app-installed.png" alt="">
            </div>
            <div class="col-lg-8">
                <div class="media timeline-item">
                    <div class="media-body">
                        <h2 class="media-heading">3) Welcome page</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="media-right media-top hidden-sm hidden-xs">
                        <img class="img-circle media-object img-thumbnail" src="/image/tour/start-app-installed.png" alt="">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="visible-sm visible-xs">
                <img class="img-circle img-thumbnail img-responsive center-block" width=250 src="/image/tour/migration.png" alt="">
            </div>
            <div class="col-lg-8 col-lg-offset-4">
                <div class="media timeline-item">
                    <div class="media-left media-top hidden-sm hidden-xs">
                        <img class="img-circle media-object img-thumbnail" src="/image/tour/migration.png" alt="">
                        <div class="line"></div>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">4) Migrations</h2>
<?php HL::begin(['language' => 'bash']); ?>
./yii migrate/create create_comment_table
<?php HL::end(); ?>
<?php HL::begin(['capture' => true]); ?>
use yii\db\Schema;
use yii\db\Migration;

class m150416_155923_create_comment_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'object_type' => $this->string(64)->notNull(),
            'object_id' => $this->string(64)->notNull(),
            'text' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-comment-object_type-object_id', '{{%comment}}', ['object_type', 'object_id']);
    }

    public function down()
    {
        $this->dropTable('{{%comment}}');
    }
}
<?php $hl = HL::end(); ?>
                        <?php Modal::begin(['header' => '<h2>Comment Migration</h2>',
                            'id' => 'migration',
                            'toggleButton' => ['label' => 'View generated migration'],
                            'closeButton' =>  ['label' => 'Close'],
                            'clientOptions' => ['backdrop' => false],
                            ]); ?>
                            <?= $hl->captured; ?>

                        <?php Modal::end(); ?>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="visible-sm visible-xs">
                <img class="img-circle img-thumbnail img-responsive center-block" width=250 src="/image/tour/gii.png" alt="">
            </div>
            <div class="col-lg-8">
                <div class="media timeline-item">
                    <div class="media-body">
                        <h2 class="media-heading">5) Gii - Yii Code Generator</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="media-right media-top hidden-sm hidden-xs">
                        <img class="img-circle media-object img-thumbnail" src="/image/tour/gii.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>What to do next?</h2>
            <ol>
                <li><?= Html::a('Read "Getting started" guide', ['guide/view', 'section' => 'start-installation', 'language' => 'en', 'version' => key(Yii::$app->params['guide.versions']), 'type' => 'guide']) ?>.</li>
                <li>To learn more, <?= Html::a('read the Guide', ['guide/entry']) ?>.</li>
                <li>Get to know the <?= Html::a('API docs', ['api/index', 'version' => reset(Yii::$app->params['api.versions'])])?>. you'll use them every day (at least for a while). You can view Yii source code directly in the API docs. The API search box is invaluable.</li>
            </ol>

            <p>Check this <a href="http://www.yiiframework.com/wiki/268/how-to-learn-yii">great wiki article written by Yii community</a>.</p>
        </div>
    </div>
</div>
