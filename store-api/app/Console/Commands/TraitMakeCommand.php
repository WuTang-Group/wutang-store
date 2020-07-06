<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitMakeCommand extends GeneratorCommand
{
    /**
     * 生成trait格式，需传名称
     *
     * @var string
     */
    protected $signature = 'make:trait { name }';

    /**
     * trait说明
     *
     * @var string
     */
    protected $description = 'Create a Trait';

    /**
     * 定义模板文件位置
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/trait.stub';
    }

    /**
     * 默认命名空间
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Traits';
    }
}
