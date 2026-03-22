<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?125                 ?0                  	;0	>>125
1   5    ASSIGN/38                 ?0        16?0                 1:'Watch Folder'    	;0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'header.php'       ?0                  	;2
3   7    ECHO/40                   ?0        3:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
4   8    FETCH_IS/89               $7=       4:'_SERVER'          ?0                  	;0
5   8    ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   5:'HTTP_X_REQUESTED_WITH'	;16777216
6   8    BOOL_NOT/13               #9=       #8                   ?0                  	;0
7   8    JMPZ_EX/46                #9=       #9                   ?15                 	;0	>>15
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strtolower'      	;1
9   8    FETCH_FUNC_ARG/92         $10=      8:'_SERVER'          ?0                  	;1
10  8    FETCH_DIM_FUNC_ARG/93     $11=      $10                  9:'HTTP_X_REQUESTED_WITH'	;1
11  8    SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
12  8    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
13  8    IS_EQUAL/17               #13=      $12                  10:'xmlhttprequest' 	;0
14  8    BOOL/52                   #9=       #13                  ?0                  	;0
15  8    BOOL_NOT/13               #14=      #9                   ?0                  	;0	<<7
16  8    JMPZ/43                   ?0        #14                  ?18                 	;0	>>18
17  9    GOTO/253                  ?0        ?113                 ?11                 	;0
18  11   ECHO/40                   ?0        12:' style="display: none;"' ?0                  	;0	<<16
19  12   GOTO/253                  ?0        ?113                 ?13                 	;0
20  14   ECHO/40                   ?0        14:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The folder is now being watched. It will be scanned during the next Watch Folder run.
                </div>
				' ?0                  	;0
21  16   ECHO/40                   ?0        15:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th class="text-center">Status</th>
									<th>Type</th>
									<th>Server Name</th>
									<th>Directory</th>
									<th class="text-center">Last Run</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
22  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'dffCDAfe3a02352C'	;0
23  17   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
24  17   FE_RESET_R/77             $16=      $15                  ?111                	;0
25  17   FE_FETCH_R/78             ?0        $16                  16?1                	;111	>>111	<<110
26  18   NOP/0                     ?0        ?0                   ?0                  	;1
27  18   GOTO/253                  ?0        ?94                  ?18                 	;0
28  21   ECHO/40                   ?0        19:'								<tr id="folder-' ?0                  	;0
29  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
30  22   FETCH_DIM_FUNC_ARG/93     $17=      16?1                 22:'id'             	;1
31  22   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
32  22   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
33  22   ECHO/40                   ?0        $18                  ?0                  	;0
34  23   ECHO/40                   ?0        23:'">
									<td class="text-center">' ?0                  	;0
35  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
36  24   FETCH_DIM_FUNC_ARG/93     $19=      16?1                 26:'id'             	;1
37  24   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
38  24   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
39  24   ECHO/40                   ?0        $20                  ?0                  	;0
40  25   NOP/0                     ?0        ?0                   ?0                  	;1
41  25   GOTO/253                  ?0        ?42                  ?27                 	;0
42  27   ECHO/40                   ?0        28:'</td>
                                    <td class="text-center">
                                        ' ?0                  	;0
43  28   FETCH_DIM_R/81            $21=      16?1                 29:'active'         	;0
44  28   JMPZ/43                   ?0        $21                  ?47                 	;0	>>47
45  29   NOP/0                     ?0        ?0                   ?0                  	;1
46  29   GOTO/253                  ?0        ?50                  ?30                 	;0
47  31   ECHO/40                   ?0        31:'                                        <i class="text-secondary fas fa-square"></i>
                                        ' ?0                  	;0	<<44
48  32   NOP/0                     ?0        ?0                   ?0                  	;1
49  32   GOTO/253                  ?0        ?87                  ?32                 	;0
50  34   NOP/0                     ?0        ?0                   ?0                  	;1
51  34   GOTO/253                  ?0        ?86                  ?33                 	;0
52  36   ECHO/40                   ?0        34:'</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./watch_add?id=' ?0                  	;0
53  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'intval'         	;1
54  37   FETCH_DIM_FUNC_ARG/93     $22=      16?1                 37:'id'             	;1
55  37   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
56  37   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
57  37   ECHO/40                   ?0        $23                  ?0                  	;0
58  38   ECHO/40                   ?0        38:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
59  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'intval'         	;1
60  39   FETCH_DIM_FUNC_ARG/93     $24=      16?1                 41:'id'             	;1
61  39   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
62  39   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
63  39   ECHO/40                   ?0        $25                  ?0                  	;0
64  40   ECHO/40                   ?0        42:', \'force\');"><i class="mdi mdi-refresh"></i></button>
											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
65  41   NOP/0                     ?0        ?0                   ?0                  	;1
66  41   GOTO/253                  ?0        ?78                  ?43                 	;0
67  43   FETCH_DIM_R/81            $26=      16?1                 44:'server_id'      	;0
68  43   FETCH_DIM_R/81            $27=      16?2                 $26                 	;0
69  43   FETCH_DIM_R/81            $28=      $27                  45:'server_name'    	;0
70  43   ECHO/40                   ?0        $28                  ?0                  	;0
71  44   ECHO/40                   ?0        46:'</td>
									<td>' ?0                  	;0
72  45   FETCH_DIM_R/81            $29=      16?1                 47:'directory'      	;0
73  45   ECHO/40                   ?0        $29                  ?0                  	;0
74  46   ECHO/40                   ?0        48:'</td>
									<td class="text-center">' ?0                  	;0
75  47   ECHO/40                   ?0        16?3                 ?0                  	;0
76  48   NOP/0                     ?0        ?0                   ?0                  	;1
77  48   GOTO/253                  ?0        ?52                  ?49                 	;0
78  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'intval'         	;1
79  50   FETCH_DIM_FUNC_ARG/93     $30=      16?1                 52:'id'             	;1
80  50   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
81  50   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
82  50   ECHO/40                   ?0        $31                  ?0                  	;0
83  51   ECHO/40                   ?0        53:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
84  53   NOP/0                     ?0        ?0                   ?0                  	;1
85  53   GOTO/253                  ?0        ?110                 ?54                 	;0
86  55   ECHO/40                   ?0        55:'                                        <i class="text-success fas fa-square"></i>
                                        ' ?0                  	;0
87  57   ECHO/40                   ?0        56:'                                    </td>
									<td>' ?0                  	;0
88  58   FETCH_DIM_R/81            $32=      16?1                 57:'type'           	;0
89  58   FETCH_DIM_R/81            $33=      58:array (
  'movie' => 'Movies',
  'series' => 'Series',
) $32                 	;0
90  58   ECHO/40                   ?0        $33                  ?0                  	;0
91  59   ECHO/40                   ?0        59:'</td>
									<td>' ?0                  	;0
92  60   NOP/0                     ?0        ?0                   ?0                  	;1
93  60   GOTO/253                  ?0        ?67                  ?60                 	;0
94  62   FETCH_DIM_R/81            $34=      16?1                 61:'last_run'       	;0
95  62   IS_SMALLER/19             #35=      62:0                 $34                 	;0
96  62   JMPZ/43                   ?0        #35                  ?99                 	;0	>>99
97  63   NOP/0                     ?0        ?0                   ?0                  	;1
98  63   GOTO/253                  ?0        ?102                 ?63                 	;0
99  65   ASSIGN/38                 ?31       16?3                 64:'Never'          	;0	<<96
100 66   NOP/0                     ?0        ?0                   ?0                  	;1
101 66   GOTO/253                  ?0        ?28                  ?65                 	;0
102 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'date'           	;2
103 68   SEND_VAL_EX/116           ?80       68:'Y-m-d H:i:s'     ?1                  	;0
104 68   FETCH_DIM_FUNC_ARG/93     $37=      16?1                 69:'last_run'       	;2
105 68   SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
106 68   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
107 68   ASSIGN/38                 ?34       16?3                 $38                 	;0
108 69   NOP/0                     ?0        ?0                   ?0                  	;1
109 69   GOTO/253                  ?0        ?28                  ?70                 	;0
110 70   JMP/42                    ?0        ?25                  ?0                  	;0	>>25
111 70   FE_FREE/127               ?0        $16                  ?0                  	;0	<<24
112 73   GOTO/253                  ?0        ?134                 ?71                 	;0
113 76   ECHO/40                   ?0        72:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
114 77   INCLUDE_OR_EVAL/73        ?35       73:'topbar.php'      ?0                  	;2
115 78   ECHO/40                   ?0        74:'					</div>
					<h4 class="page-title">Watch Folder</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
116 79   ISSET_ISEMPTY_CV/197      #41=      16?4                 ?0                  	;33554432
117 79   JMPZ_EX/46                #41=      #41                  ?121                	;0	>>121
118 79   FETCH_CONSTANT/99         #42=      ?0                   75:'STATUS_SUCCESS' 	;16
119 79   IS_EQUAL/17               #43=      16?4                 #42                 	;0
120 79   BOOL/52                   #41=      #43                  ?0                  	;0
121 79   BOOL_NOT/13               #44=      #41                  ?0                  	;0	<<117
122 79   JMPZ/43                   ?0        #44                  ?124                	;0	>>124
123 80   GOTO/253                  ?0        ?21                  ?78                 	;0
124 82   GOTO/253                  ?0        ?20                  ?79                 	;0	<<122
125 84   INCLUDE_OR_EVAL/73        ?40       80:'session.php'     ?0                  	;2	<<0
126 85   INCLUDE_OR_EVAL/73        ?41       81:'functions.php'   ?0                  	;2
127 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'E6D500e19634d513'	;0
128 86   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
129 86   JMPZ/43                   ?0        $47                  ?131                	;0	>>131
130 87   GOTO/253                  ?0        ?133                 ?84                 	;0
131 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'e72f42A93714ba87'	;0	<<129
132 89   DO_FCALL_BY_NAME/131      ?43       ?0                   ?0                  	;0
133 91   GOTO/253                  ?0        ?1                   ?87                 	;0
134 93   ECHO/40                   ?0        88:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
135 94   GOTO/253                  ?0        ?136                 ?89                 	;0
136 96   INCLUDE_OR_EVAL/73        ?44       90:'footer.php'      ?0                  	;2
137 97   NOP/0                     ?0        91:1                 ?0                  	;4294967295
*/

?>