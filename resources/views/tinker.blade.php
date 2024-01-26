<style type="text/css">
    dl {
        display: flex;
        flex-flow: row wrap;
        border: solid #333;
        border-width: 1px 1px 0 0;
    }

    dt {
        flex-basis: 20%;
        padding: 2px 4px;
        background: #333;
        text-align: right;
        color: #fff;
    }

    dd {
        flex-basis: 70%;
        flex-grow: 1;
        margin: 0;
        padding: 2px 4px;
        border-bottom: 1px solid #333;
    }


    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Modules</th>
            <th>Upgrades</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($modules as $module)
        <tr>
            <td>
                {{ $module->name }}
            </td>
            <td>
                @foreach($module->upgrades as $upgrade)
                <table>
                    <thead>
                        <tr>
                            <th>level</th>
                            <th>construction time</th>
                            <th>is constucted</th>
                            <th>requirements</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $upgrade->level }}</td>
                            <td>{{ $upgrade->construction_time }}</td>
                            <td>{{ $upgrade->is_constructed }}</td>
                            <td style="width: 50%;">
                                @foreach ($upgrade->requirements as $requirement)
                                <dl>
                                    <dt><b>name:</b></dt>
                                    <dd>{{ $requirement->requirementable->name }}</dd>
                                    <dt><b>requirementable_type:</b></dt>
                                    <dd>{{ str($requirement->requirementable_type)->classBasename() }}</dd>
                                    <dt><b>required_amount:</b></dt>
                                    <dd>{{ $requirement->required_amount }}</dd>
                                </dl>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr />

<h3>Required Items</h3>
@foreach ($requiredItems as $item)
<dl>
    <dt><b>name:</b></dt>
    <dd>{{ $item->requirementable->name }}</dd>
    <dt><b>requirementable_type:</b></dt>
    <dd>{{ str($item->requirementable_type)->classBasename() }}</dd>
    <dt><b>required_amount:</b></dt>
    <dd>{{ $item->required_amount }}</dd>
</dl>
@endforeach

<h3>All Requirements</h3>
@foreach ($allRequirements as $requirement)
<dl>
    <dt><b>name:</b></dt>
    <dd>{{ $requirement->requirementable->name }}</dd>
    <dt><b>requirementable_type:</b></dt>
    <dd>{{ str($requirement->requirementable_type)->classBasename() }}</dd>
    <dt><b>required_amount:</b></dt>
    <dd>{{ $requirement->required_amount }}</dd>
</dl>
@endforeach