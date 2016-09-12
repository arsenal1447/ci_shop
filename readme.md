## ci框架为基础的商城

 <a href="http://codeigniter.org.cn/forums/forum.php?mod=viewthread&tid=20997&extra=page%3D1" target="_blank">原文地址</a>

### 添加全局函数

首先在application/helpers/下创建你的公共函数名,比如

    mydebug_helper.php（全部小写）,写下该方法，

在application/config/autoload.php文件中修改

    $autoload['helper'] = array('url','query_string','mydebug');

好了，这样就加载进去了，当时我还是使用



	......
	$segments = $this->uri->uri_to_assoc();
	$this->load->helper('mydebug');
	pr($segments);
	....



