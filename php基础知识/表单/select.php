<?php
//下拉菜单单选
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

if ($q) {
    if ($q == 'blog') {
        echo 'blog.oceaneyes.cn';
    } else if ($q == 'www') {
        echo 'www.oceaneyes.cn';
    } else if ($q == 'top') {
        echo 'oceaneyes.top';
    }
}
else {
?>
    <form action="" method="get">
        <select name="q">
            <option>选择一个站点</option>
            <option value="blog">blog</option>
            <option value="www">主页</option>
            <option value="top">学习笔记</option>
        </select>
        <button type="submit" value="提交">提交</button>
    </form>

<?php
}
?>