
<h2>{tr:password_hashing_performance}</h2>

<p>
    This section allows you to see the impact of the config setting
    encryption_password_hash_iterations_new_files on performance. Note
    that this hashing is done for every chunk uploaded. If you have set
    encryption_key_version_new_files to 1 or above and the user is
    using a generated password then this hashing is not performed.
</p>

<input type="button" data-action="show-password-hashing-performance" value="{tr:calculate}" />

<table class="password-hashing-performance">
    <tr>
        <th>{tr:iterations}</th>
        <th>{tr:time_to_complete_ms}</th>
        <th>{tr:system_active_setting}</th>
    </tr>
    
   
    <tr class="tpl">
        <td class="rounds number"></td>
        <td class="milliseconds number"></td>
        <td class="active number"></td>
    </tr>
</table>

<h2>crypto performance</h2>

<p>
    The below will encrypt and decrypt a chunk of data without sending it anywhere.
    Your current chunk size is {cfg:upload_chunk_size} bytes.
</p>

<input type="button" data-action="show-chunk-crypto-performance" value="crypto perf" />

<table class="crypto-performance">
    <tr>
        <th>{tr:action}</th>
        <th>{tr:time_to_complete_ms}</th>
    </tr>
    
   
    <tr class="tpl">
        <td class="action"></td>
        <td class="milliseconds number"></td>
    </tr>
</table>


<script type="text/javascript" src="{path:js/admin_testing.js}"></script>