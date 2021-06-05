<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Transaksi</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>


<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id </th> 
                      <th>Id Pelanggan</th>
                      
                      <th>Id Barang</th>
                     
                    
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($transaksi as $Transaksi)
                  <tr>
                      
                      <td>{{ $Transaksi->id }}</td>
                      <td>{{ $Transaksi->id_pelanggan}}</td>
                      <td>{{ $Transaksi->id_barang }}</td>
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>