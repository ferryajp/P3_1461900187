<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Barang</title>
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
                  
                      <th>Id Barang</th> 
                      <th>Nama Barang</th>
                      
                      <th>Harga Barang</th>
                     
                    
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($barang as $Barang)
                  <tr>
                      
                      <td>{{ $Barang->id }}</td>
                      <td>{{ $Barang->nama}}</td>
                      <td>{{ $Barang->harga }}</td>
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>