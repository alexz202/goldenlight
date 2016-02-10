
{{ form("dtb_raise_project_market/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("dtb_raise_project_market", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create dtb_raise_project_market</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="raise_id">Raise</label>
        </td>
        <td align="left">
            {{ text_field("raise_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="aim_market">Aim Of Market</label>
        </td>
        <td align="left">
            {{ text_field("aim_market", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="aim_market_feaure">Aim Of Market Of Feaure</label>
        </td>
        <td align="left">
            {{ text_field("aim_market_feaure", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="competitive_strategy">Competitive Of Strategy</label>
        </td>
        <td align="left">
            {{ text_field("competitive_strategy", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="update_ts">Update Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("update_ts", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
