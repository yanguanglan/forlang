使用Sphinx生成文档
==================

1 安装 python

.. code-block:: bash

    yum install python-devel python-setuptools

2 安装 setuptools

.. code-block:: bash

    easy_install -U setuptools

3 安装 sphinx

.. code-block:: bash

    easy_install -U Sphinx

4 安装 docutils

.. code-block:: bash

    easy_install -U docutils

5 在项目中新建目录 docs

.. code-block:: bash

    cd /path/to/project
    mkdir docs

6 初始化目录结构

.. code-block:: bash

    cd docs
    sphinx-quickstart

7 编辑文档内容，参照rst语法 http://wstudio.web.fc2.com/others/restructuredtext.html

8 生成文档

.. code-block:: bash

    make html

9  文档托管请看 http://read-the-docs.readthedocs.org





