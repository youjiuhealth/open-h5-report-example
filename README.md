## 报告无登录访问方案
###### 请求方式：get

###### 请求ur：

~~~
# xone系列pc端示例
https://op.youjiuhealth.com/report/detail/{measurementId}?appid={appid}&timestamp={timestamp}&token={token}
~~~

###### 请求完整url示例：

~~~
# xone系列pc端示例
https://op.youjiuhealth.com/report/detail/21970?appid=861541050186538&timestamp=1546850233&token=6ad75a335eca29086f25d46a78f7dd36
~~~


###### 请求参数说明：

| 名称          | 类型   | 说明                                                     |
| ------------- | ------ | -------------------------------------------------------- |
| appid         | int    | 商家appid                                                |
| timestamp     | int    | 当前时间戳                                               |
| token         | string | 请求token，有效期30分钟                                  |
| measurementId | int    | 报告ID（通过推送、商户端或者对外获取报告列表接口中获得） |

> 可选配置参数
>
> | 字段          | 类型   | 默认值 | 取值说明                                         | 备注                                   |
> | ------------- | ------ | ------ | ------------------------------------------------ | -------------------------------------- |
> | check_browser | int    | 1      | 0表示关闭，其余都为开启                          | 是否开启浏览器型号和版本检查，默认开启 |
> | lang          | string | zh     | 支持`zh` \ `en` \ `cht` \ `jp`，不同产品略有差异 | 语言                                   |
> | weight_type   | string | kg     | 支持`kg`或`lbs`（磅），不同产品略有差异          | 重量单位                               |
> | length_type   | string | cm     | 支持`cm`或`in`（英寸），不同产品略有差异         | 长度单位                               |
>



###### token生成规则
~~~
token = md5( AppID + AppSecret + timestamp + measurementId )
# 伪代码，+ 为字符串拼接符
~~~

###### 组合式token生成规则
~~~
combinationToken = "third." + measurementId + "." + AppID + "." + timestamp + "." + token
# 伪代码，+ 为字符串拼接符
# 输出示例
# third.337964691.861549564186538.1705918536.5e01fc5f09070103c7529b17e94eec26
~~~

# 参数及不同产品访问路径

| 参数          | XONE系列                           | U+系列                     |
| ------------- | ---------------------------------- | -------------------------- |
| appid         | 必填                               | 必填                       |
| timestamp     | 必填                               | 必填                       |
| token         | 必填                               | 必填                       |
| measurementId | 必填                               | 必填                       |
| check_browser | 选填                               | 不支持                     |
| lang          | `zh` \ `en` \ `cht` \ `jp` \ `vie` | `zh` \ `en` \ `cht` \ `jp` |
| weight_type   | 不支持                             | `kg`或`lbs`（磅）          |
| length_type   | 不支持                             | `cm`或`in`（英寸）         |

~~~
# xone系列PC端
https://op.youjiuhealth.com/report/detail/{measurementId}?appid={appid}&timestamp={timestamp}&token={token}

# xone系列移动端
https://c.youjiuhealth.com/index.html#/pages/report/show/show?id={$measurementId}&token={$combinationToken}&lang={lang}

# U+系列移动端
https://mini-fit-butler-client.youjiuhealth.com/index.html#/subPack/report/body-resume/body-resume?type=u-plus&id={measurementId}&token={combinationToken}&lang={lang}&weight_type={weight_type}&length_type={length_type}

# U+系列PC端
https://report-u-01.youjiuhealth.com/report-view/report/adult/measure-report?id={measurementId}&token={combinationToken}&lang={lang}&weight_type={weight_type}&length_type={length_type}
~~~

