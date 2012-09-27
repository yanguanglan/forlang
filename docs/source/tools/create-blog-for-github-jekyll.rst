使用Github & jekyll 写博客
==================

这里以 windows xp 为例
 
1 安装 ruby, 选择下载安装 rubyinstaller_ , 分别下载 最新版本（Ruby 1.9.3-p194），DEVELOPMENT KIT（DEVELOPMENT KIT）。

Ruby 1.9.3-p194 直接点击安装，我这里安装在 C:\Ruby193，DEVELOPMENT KIT 解压安装即可，我这里解压在 C:\Devkit。

.. _rubyinstaller:  http://rubyinstaller.org/downloads/

.. code-block:: bash

    cd C:\Devkit
    ruby dk.rb init 初始化，找到ruby的安装目录
    ruby dk.rb review 确认ruby的安装目录
    ruby dk.rb install 安装ruby DEVKIT

详细请看 https://github.com/oneclick/rubyinstaller/wiki/Development-Kit

2 安装 jekyll

.. code-block:: bash

    gem sources --remove http://rubygems.org/
    gem sources -a http://ruby.taobao.org/ 加入淘宝的源
     
    gem sources -l 查看源
    
    gem install jekyll 安装jekyll
    
    gem install rdiscount kramdown 安装 rdiscount kramdown 都是用于解析 markdown
    
    

3 使用 jekyllbootstrap_ 向导

.. _jekyllbootstrap:  http://jekyllbootstrap.com/

4 更多连接
  http://chen.yanping.me/cn/blog/2012/03/18/github-pages-step-by-step/
  http://pages.github.com/





