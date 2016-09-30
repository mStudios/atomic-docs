<!-- patterns/examples/c_item.php -->
<div class="prodWrapper">
	<h3 id="description{{id}}">{{name}}</h3>
	<div><span>${{price}} </span><input id="price{{id}}" type="hidden" value="{{price}}"></div>
	<div><span>Qty: </span><input type="number" min="0" value="1" id="qty{{id}}"></div>
	{{#addButton}}
	{{>examples/b_button}}
	{{/addButton}}
</div>