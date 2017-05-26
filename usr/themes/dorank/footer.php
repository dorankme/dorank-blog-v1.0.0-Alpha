<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<hr class="uk-article-divider">
<footer id="footer" role="contentinfo">
    <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-panel">
            &copy;<?php echo date('Y'); ?>
            <p>
                <a href="https://github.com/dorankme"><i class="uk-icon-hover uk-icon-github-alt"></i></a>
                <a href="https://www.jianshu.com/u/310dab9e6e91"> <img src="https://cdn2.jianshu.io/assets/web/logo-58fd04f6f0de908401aa561cda6a0688.png" width="25px;"></a>&nbsp;<br>
                Theme Made By
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
                <?php _e('Power By<a href="http://www.typecho.org"> Typecho </a>'); ?>
            </p>
            <a href="../index.html">
                <img src="" width="90" height="30">
            </a>
        </div>
    </div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="7LTKBB3N2CEXN">
        <input type="image" src="https://www.paypalobjects.com/zh_XC/C2/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
        <img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
    </form>
</footer>
<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/uikit.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/Parser.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.share.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.social-share.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/components/grid.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/components/autocomplete.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/components/search.min.js'); ?>"></script>
<!--百度自动推送-->
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<!--百度统计-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f588aec0684be17e3648bebf5886867c";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
