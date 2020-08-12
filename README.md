## XONE系列设备报告无登录访问方案
###### 请求方式：get

###### 请求ur：

~~~
https://op.youjiuhealth.com/report/detail/{measurementId}?appid={appid}&timestamp={timestamp}&token={token}
~~~

###### 请求完整url示例：

~~~
https://op.youjiuhealth.com/report/detail/21970?appid=861541050186538&timestamp=1546850233&token=6ad75a335eca29086f25d46a78f7dd36
~~~


###### 请求参数说明：

| 名称          | 类型   | 说明                                                     |
| ------------- | ------ | -------------------------------------------------------- |
| appid         | int    | 商家appid                                                |
| timestamp     | int    | 当前时间戳                                               |
| token         | string | 请求token，有效期30分钟                                  |
| measurementId | int    | 报告ID（通过推送、商户端或者对外获取报告列表接口中获得） |
## XONE系列设备报告无登录访问方案
###### 请求方式：get

###### 请求ur：

~~~
https://op.youjiuhealth.com/report/detail/{measurementId}?appid={appid}&timestamp={timestamp}&token={token}
~~~

###### 请求完整url示例：

~~~
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
> | 字段          | 类型 | 默认值 | 取值说明                | 备注                                   |
> | ------------- | ---- | ------ | ----------------------- | -------------------------------------- |
> | check_browser | int  | 1      | 0表示关闭，其余都为开启 | 是否开启浏览器型号和版本检查，默认开启 |
>
> 

###### token生成规则

~~~
token = md5( AppID . AppSecret . timestamp . measurementId )
~~~
###### token生成规则

~~~
token = md5( AppID . AppSecret . timestamp . measurementId )
~~~

