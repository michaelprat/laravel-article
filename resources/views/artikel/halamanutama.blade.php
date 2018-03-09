<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tabel latihan</title>
<link rel="stylesheet" href="{{asset('artikles/css/screen.css')}}" type="text/css" media="screen" title="default" />
{{--[if IE]--}}
<link rel="stylesheet" media="all" type="text/css" href="{{asset('artikles/css/pro_dropline_ie.css')}}" />
{{--![endif]--}}

{{--  jquery core --}}
<script src="{{asset('artikles/js/jquery/jquery-1.4.1.min.js')}}" type="text/javascript"></script>

{{-- Custom jquery scripts --}}
<script src="{{asset('artikles/js/jquery/custom_jquery.js')}}" type="text/javascript"></script>
 

{{-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix --}}
<script src="asset('artikles/js/jquery/jquery.pngFix.pack.js')}}" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
{{-- Start: page-top-outer --}}
<div id="page-top-outer">    

{{-- Start: page-top --}}
<div id="page-top">

	{{-- start logo --}}
	<div id="logo">
	<a href=""><img src="{{asset('artikles/images/shared/logo.png')}}" width="156" height="40" alt="" /></a>
	</div>
	{{-- end logo --}}
	

 	<div class="clear"></div>

</div>
{{-- End: page-top --}}

</div>
{{-- End: page-top-outer --}}
	
<div class="clear">&nbsp;</div>
 
{{--  start nav-outer-repeat................................................................................................. START --}}
<div class="nav-outer-repeat"> 
{{--  start nav-outer --}}
<div class="nav-outer"> 

		{{--  start nav --}}
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><b>{!! link_to(route('article.index'),"Article")!!}</b></li>
        <li><b>{!! link_to(route('kategori.index'),"Katagori")!!}</b></li>
		</ul>
	
		                    
	
		<div class="nav-divider">&nbsp;</div>
		
	
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
	
</div>
<div class="clear"></div>
{{--  start nav-outer --}}
</div>
{{--  start nav-outer-repeat................................................... END --}}

 <div class="clear"></div>
 
{{-- start content-outer ........................................................................................................................START --}}
<div id="content-outer">
{{-- start content --}}
<div id="content">

	{{--  start page-heading --}}
	<div id="page-heading">

        <h1>{!! link_to(route('article.create'),"Add article")!!} &nbsp; {!! link_to(route('kategori.create'),"Add category")!!}</h1>
	</div>
	{{-- end page-heading --}}

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="{{asset('artikles/images/shared/side_shadowleft.jpg')}}" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="{{asset('artikles/images/shared/side_shadowright.jpg')}}" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		{{--  start content-table-inner ...................................................................... START --}}
		<div id="content-table-inner">
		
			{{--  start table-content  --}}
			<div id="table-content">
			
			
		 
				{{--  start product-table ..................................................................................... --}}
			
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					
					<th class="table-header-repeat line-left minwidth-1"><a href="">ID </a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Judul</a></th>
					<th class="table-header-repeat line-left"><a href="">Isi artikel</a></th>
					<th class="table-header-repeat line-left"><a href="">Edit</a></th>
					<th class="table-header-repeat line-left"><a href="">Delete</a></th>
				
                </tr>
                @foreach($artikel as $tampil)
				<tr>
				
					<td>{!!$tampil->id!!}</td>
					<td>{!! link_to(route('article.show',$tampil->id),$tampil->judul) !!}</td>
					<td>{!!$tampil->konten!!}</td>
					<td>{!! link_to(route('article.edit',$tampil->id),'Edit') !!}</td>
					<td>{!! Form::open(array('route'=>array('article.destroy',$tampil->id),'method'=>'delete')) !!}
					    {!! Form::submit('Delete',array("onclick"=>"return confirm('are you sure?')")) !!}
						{!! Form::close() !!}
						</td>
			
                </tr>
                @endforeach
				</table>
				{{--  end product-table................................... --}}
			
			</div>
			{{--  end content-table  --}}
		
			{{--  start actions-box ............................................... --}}
		
			
			<div class="clear"></div>
		 
		</div>
		{{--  end content-table-inner ............................................END  --}}
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
{{--  end content --}}
<div class="clear">&nbsp;</div>
</div>
{{--  end content-outer........................................................END --}}

<div class="clear">&nbsp;</div>
    
{{-- start footer --}}       
<div id="footer">
	{{--  start footer-left --}}
	<div id="footer-left">
	
	Admin Skin &copy; Copyright Internet Dreams Ltd. <span id="spanYear"></span> <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	{{--  end footer-left --}}
	<div class="clear">&nbsp;</div>
</div>
{{-- end footer --}}
 
</body>
</html>