<div class="white-box">
    <div class="container step-by-step text-center">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <h2>Step by step guide to Property Acquisition</h2>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <img src="/assets/investment/images/hr-gray.png">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <div class="steps">
        [{foreach from=$step_data item=foo}]
            <div class="step">
                <h4>[{$foo->_title|escape:'html'}]</h4>
                <p>[{$foo->_content|escape:'html'}]</p>
            </div>
        [{/foreach}]
        </div>
        <div class="space-line"></div>
        <div class="space-line"></div>
    </div>
</div>