
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_investor/new", "Create dtb_raise_project_investor") }}
</div>

{{ form("dtb_raise_project_investor/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_investor</h1>
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
            <label for="user_id">User</label>
        </td>
        <td align="left">
            {{ text_field("user_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="invest_money">Invest Of Money</label>
        </td>
        <td align="left">
            {{ text_field("invest_money", "type" : "numeric") }}
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
        <td align="right">
            <label for="is_show">Is Of Show</label>
        </td>
        <td align="left">
            {{ text_field("is_show", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
