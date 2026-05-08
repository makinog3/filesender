<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: ダウンロードのお知らせ

{alternative:plain}

利用者様、

あなたがアップロードしたファイルのいくつか{if:files.first().transfer.get_a_link}が転送リンクにより{cfg:site_name}からダウンロードされました{else}を{recipient.email}が{cfg:site_name}からダウンロードしました{endif}:

{if:files>1}{each:files as file}
  - {file.path} ({size:file.size})
{endeach}{else}
{files.first().path} ({size:files.first().size})
{endif}

次の転送ページからファイルにアクセスして詳細なダウンロード統計を表示できます:{files.first().transfer.link}

以上、よろしくお願いいたします。
{cfg:site_name}

{alternative:html}

<p>
    利用者様、
</p>

<p>
    あなたがアップロードしたファイルのいくつか{if:files.first().transfer.get_a_link}が転送リンクにより{cfg:site_name}からダウンロードされました{else}を{recipient.email}が{cfg:site_name}からダウンロードしました{endif}:

</p>

<p>
   {if:files>1}
    <ul>
       {each:files as file}
            <li>{file.path} ({size:file.size})</li>
       {endeach}
    </ul>
   {else}
   {files.first().path} ({size:files.first().size})
   {endif}
</p>

<p>
    次の転送ページからファイルにアクセスして詳細なダウンロード統計を表示できます:
<a href="{files.first().transfer.link}">{files.first().transfer.link}</a>
</p>

<p>
    以上、よろしくお願いいたします。<br />
    {cfg:site_name}
</p>
