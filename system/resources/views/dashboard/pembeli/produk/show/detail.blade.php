<p>
	<b style="color: red">
	{{$produk->harga}} </b>|<br>
	Stok : {{$produk->stok}} |<br>
	Lokasi : {{$produk->lokasi}}| <br>
	Seller : {{$produk->seller->nama}}|<br>
	Tanggal Produksi : {{$produk->created_at->format("d M Y")}} /
	{{$produk->created_at->diffForHumans()}}
	p>