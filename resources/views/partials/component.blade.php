<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }}">
    @if($component->link)
    <a href="javascript: jQuery('.list-group-item.metric').hide();jQuery('.list-group-item.metric[data-component-id={{ $component->id }}]').show();jQuery('html, body').animate({scrollTop: jQuery('.section-metrics').offset().top}, 2000);"><i class="ion ion-stats-bars"></i></a>&nbsp;<a href="{{ $component->link }}" target="_blank" class="links">{{ $component->name }}</a>
    @else
    <a href="javascript: jQuery('.list-group-item.metric').hide();jQuery('.list-group-item.metric[data-component-id={{ $component->id }}]').show();jQuery('html, body').animate({scrollTop: jQuery('.section-metrics').offset().top}, 2000);"><i class="ion ion-stats-bars"></i></a>&nbsp;{{ $component->name }}
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}" data-container="body"></i>
    @endif

    <div class="pull-right">
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip" title="{{ trans('cachet.components.last_updated', ['timestamp' => $component->updated_at_formatted]) }}">{{ $component->human_status }}</small>
    </div>
</li>
