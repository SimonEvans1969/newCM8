<div class="panel panel-default">
    <div class="panel-heading">{{ $clubclass->name }}</div>
    <div class="panel-body">{{ $clubclass->description }}</div>
    <div class="panel-footer">{{ (isset($classAttributes->MembersOnly) && ($classAttributes->MembersOnly == 'Y')) ? 'Members only' : 'Click to book'}}</div>
</div>
