
{{ form("dtb_raise_project_idea/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("dtb_raise_project_idea", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create dtb_raise_project_idea</h1>
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
            <label for="idea_info">Idea Of Info</label>
        </td>
        <td align="left">
                {{ text_area("idea_info", "cols": "30", "rows": "4") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="purpose">Purpose</label>
        </td>
        <td align="left">
            {{ text_field("purpose", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="livestock">Livestock</label>
        </td>
        <td align="left">
            {{ text_field("livestock", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="useform">Useform</label>
        </td>
        <td align="left">
            {{ text_field("useform", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="technical">Technical</label>
        </td>
        <td align="left">
            {{ text_field("technical", "size" : 30) }}
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
            <label for="market_info">Market Of Info</label>
        </td>
        <td align="left">
                {{ text_area("market_info", "cols": "30", "rows": "4") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
