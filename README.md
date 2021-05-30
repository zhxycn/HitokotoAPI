<p align="center">
  <img alt="License" src="https://img.shields.io/github/license/zhxycn/HitokotoAPI"/>
  <img alt="Size" src="https://img.shields.io/github/languages/code-size/zhxycn/HitokotoAPI"/>
</p>

>Language: [简体中文](./README.md)  · · 暂不支持其他语言。Other languages are not currently supported.

# 一言 API (Hitokoto/ヒトコト)
基于 PHP 的一言 API (Hitokoto/ヒトコト)，非使用数据库（不依赖任何在线API和本地数据库调用一言）。

## 什么是一言
动漫也好、小说也好、网络也好，不论在哪里，我们总会看到有那么一两个句子能穿透你的心。「一言」就好似一个公开的摘抄本，我们在此记录那些让人一眼就有所感触的短句，并通过公共 API 的形式使你能够在自己的项目中调用它们。

## 使用前的准备
下载代码并部署到服务器或克隆代码至网站根目录。
```
git clone --recurse-submodules https://github.com/zhxycn/HitokotoAPI.git
```

### 环境
`PHP(Test:7.1+)`

## 调用方法
`GET`

## 参数说明
参数名|类型|含义|默认
-|-|-|-
charset|string|返回字符集，支持 utf-8 / gbk|utf-8
encode|string|返回数据格式|空
time|int|值为1时在最后输出运行时间，仅供测试使用|空

### 数据格式说明
参数值|含义
-|-
json|返回 JSON 格式数据
js|返回函数名为 hitokoto 的 JavaScript 脚本
空|返回纯文本

## 响应数据
下面是实际请求一次 `?encode=json` 的结果：
```
{
"hitokoto":"扎古不论怎么化妆都不可能变成高达的。"
}
```

## 关于
本项目在 [FlyingSky-CN](https://github.com/FlyingSky-CN/HitokotoAPI) 的基础上修改添加。

>© [zhxy-CN](https://github.com/zhxycn) [FlyingSky-CN](https://github.com/FlyingSky-CN), Released under the [Apache-2.0](./LICENSE) License.
