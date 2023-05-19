<?php
/**
 * @desc SM4Dto
 * @author Tinywan(ShaoBo Wan)
 * @date 2023/5/19 10:25
 */
declare(strict_types=1);


namespace Wotu\dto\tool;


use Wotu\dto\NormalBaseDto;

class SM4Dto extends NormalBaseDto
{
    /**
     * @var array|string[]
     */
    protected array $param = [
        "key" => "",
        "data" => "",
    ];

    /**
     * CreateRecommendDto constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $parentColumn = $this->column;
        $this->param = array_merge($parentColumn, $this->param);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \ErrorException
     */
    public function getRequestParam($params)
    {
        return $this->formatParam($params, $this->param);
    }
}