<?php
echo "
<h2>GIT Käsud</h2>
<ol>
<li>
    Repo loomine
    <pre>
        get init
    </pre>
</li>
"
?>
<li>Konfigureerumine</li>
<pre>
    git config global user.name "Polopo232"
    git config user.gmail "nikiforovnikita08@gmail.com"
    git config --global --list
</pre>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "nikitanikiforov08@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m ""
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine</li>>";