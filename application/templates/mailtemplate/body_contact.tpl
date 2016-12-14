<div style="border: 1px solid #ddd;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:13px;max-width:720px">
    
    <div style="padding:10px;border-bottom:1px solid #ddd;font-weight:bold">
        VIETNAM'S PROPERTY INVESTMENT
    </div>
    <div style="padding:10px;">
        <div style="margin:0;padding:2px;">
        <table style="font-size:13px;width:100%">
            <tr>
                <td>Name</td>
                <td>[{$params.contact_name|escape:'html'}]</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>[{$params.contact_email|escape:'html'}]</td>
            </tr>
            [{if $params.contact_subject}]
            <tr>
                <td>Subject</td>
                <td>[{$params.contact_subject|escape:'html'}]</td>
            </tr>
            [{/if}]
            [{if $params.contact_message}]
            <tr>
                <td colspan="2">Message</td>
            </tr>
            <tr>
                <td colspan="2"><div style="background: #f0f0f0;padding:8px;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word">[{$params.contact_message|escape:'html'}]</div></td>
            </tr>
            [{/if}]
        </table>
        </div>
        
    </div>
    <div style="padding:10px;border-top:1px solid #ddd;text-align: left;font-size:12px;">
        <div style="margin:0;padding:2px;">VIETNAM'S PROPERTY INVESTMENT</div>
        <p style="margin:0;padding:2px;font-style:italic;">[A] : Australia - Sydney | Vietnam - Ho Chi Minh City</p>
        <p style="margin:0;padding:2px;font-style:italic;">[T] : Australia: +90 547 854 14 57 | Vietnam: +84 163 322 3508</p>
        <p style="margin:0;padding:2px;font-style:italic;">[E] : info@linkedproperties.net</p>
    </div>
</div>