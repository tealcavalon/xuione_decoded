<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?32                  ?0                  	;0	>>32
1   6    ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2   7    INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3   8    ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Plex Sync</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #9=       16?0                 ?0                  	;33554432
5   9    JMPZ_EX/46                #9=       #9                   ?9                  	;0	>>9
6   9    FETCH_CONSTANT/99         #10=      ?0                   4:'STATUS_SUCCESS'  	;16
7   9    IS_EQUAL/17               #11=      16?0                 #10                 	;0
8   9    BOOL/52                   #9=       #11                  ?0                  	;0
9   9    BOOL_NOT/13               #12=      #9                   ?0                  	;0	<<5
10  9    JMPZ/43                   ?0        #12                  ?12                 	;0	>>12
11  10   GOTO/253                  ?0        ?44                  ?7                  	;0
12  12   GOTO/253                  ?0        ?43                  ?8                  	;0	<<10
13  14   ASSIGN/38                 ?5        16?1                 9:'Plex Sync'       	;0
14  15   INCLUDE_OR_EVAL/73        ?6        10:'header.php'      ?0                  	;2
15  16   ECHO/40                   ?0        11:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
16  17   FETCH_IS/89               $15=      12:'_SERVER'         ?0                  	;0
17  17   ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  13:'HTTP_X_REQUESTED_WITH'	;16777216
18  17   BOOL_NOT/13               #17=      #16                  ?0                  	;0
19  17   JMPZ_EX/46                #17=      #17                  ?27                 	;0	>>27
20  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
21  17   FETCH_FUNC_ARG/92         $18=      16:'_SERVER'         ?0                  	;1
22  17   FETCH_DIM_FUNC_ARG/93     $19=      $18                  17:'HTTP_X_REQUESTED_WITH'	;1
23  17   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
24  17   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
25  17   IS_EQUAL/17               #21=      $20                  18:'xmlhttprequest' 	;0
26  17   BOOL/52                   #17=      #21                  ?0                  	;0
27  17   BOOL_NOT/13               #22=      #17                  ?0                  	;0	<<19
28  17   JMPZ/43                   ?0        #22                  ?30                 	;0	>>30
29  18   GOTO/253                  ?0        ?1                   ?19                 	;0
30  20   ECHO/40                   ?0        20:' style="display: none;"' ?0                  	;0	<<28
31  21   GOTO/253                  ?0        ?1                   ?21                 	;0
32  23   INCLUDE_OR_EVAL/73        ?15       22:'session.php'     ?0                  	;2	<<0
33  24   INCLUDE_OR_EVAL/73        ?16       23:'functions.php'   ?0                  	;2
34  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'e6D500E19634d513'	;0
35  25   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
36  25   JMPZ/43                   ?0        $25                  ?38                 	;0	>>38
37  26   GOTO/253                  ?0        ?40                  ?26                 	;0
38  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'e72F42a93714bA87'	;0	<<36
39  28   DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
40  30   GOTO/253                  ?0        ?13                  ?29                 	;0
41  32   ECHO/40                   ?0        30:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
42  33   GOTO/253                  ?0        ?190                 ?31                 	;0
43  35   ECHO/40                   ?0        32:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The server is now being synced. It will be scanned during the next Plex Sync run.
                </div>
				' ?0                  	;0
44  37   ECHO/40                   ?0        33:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Plex IP</th>
									<th>Server Name</th>
                                    <th>Library</th>
									<th class="text-center">Last Run</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
45  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'getPlexServers' 	;0
46  38   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
47  38   FE_RESET_R/77             $28=      $27                  ?188                	;0
48  38   FE_FETCH_R/78             ?0        $28                  16?2                	;188	>>188	<<187
49  39   NOP/0                     ?0        ?0                   ?0                  	;1
50  39   GOTO/253                  ?0        ?68                  ?36                 	;0
51  41   FETCH_DIM_R/81            $29=      16?2                 37:'active'         	;0
52  41   JMPZ/43                   ?0        $29                  ?55                 	;0	>>55
53  42   NOP/0                     ?0        ?0                   ?0                  	;1
54  42   GOTO/253                  ?0        ?58                  ?38                 	;0
55  44   ECHO/40                   ?0        39:'                                        <i class="text-secondary fas fa-square"></i>
                                        ' ?0                  	;0	<<52
56  45   NOP/0                     ?0        ?0                   ?0                  	;1
57  45   GOTO/253                  ?0        ?84                  ?40                 	;0
58  47   ECHO/40                   ?0        41:'                                        <i class="text-success fas fa-square"></i>
                                        ' ?0                  	;0
59  48   NOP/0                     ?0        ?0                   ?0                  	;1
60  48   GOTO/253                  ?0        ?84                  ?42                 	;0
61  50   ECHO/40                   ?0        43:'                                    </td>
									<td>' ?0                  	;0
62  51   ECHO/40                   ?0        16?3                 ?0                  	;0
63  52   ECHO/40                   ?0        44:'</td>
									<td class="text-center">' ?0                  	;0
64  53   ECHO/40                   ?0        16?4                 ?0                  	;0
65  54   ECHO/40                   ?0        45:'</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./plex_add?id=' ?0                  	;0
66  55   NOP/0                     ?0        ?0                   ?0                  	;1
67  55   GOTO/253                  ?0        ?165                 ?46                 	;0
68  57   FETCH_DIM_R/81            $30=      16?2                 47:'last_run'       	;0
69  57   IS_SMALLER/19             #31=      48:0                 $30                 	;0
70  57   JMPZ/43                   ?0        #31                  ?73                 	;0	>>73
71  58   NOP/0                     ?0        ?0                   ?0                  	;1
72  58   GOTO/253                  ?0        ?76                  ?49                 	;0
73  60   ASSIGN/38                 ?24       16?4                 50:'Never'          	;0	<<70
74  61   NOP/0                     ?0        ?0                   ?0                  	;1
75  61   GOTO/253                  ?0        ?102                 ?51                 	;0
76  63   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'date'           	;2
77  63   SEND_VAL_EX/116           ?80       54:'Y-m-d H:i:s'     ?1                  	;0
78  63   FETCH_DIM_FUNC_ARG/93     $33=      16?2                 55:'last_run'       	;2
79  63   SEND_VAR_EX/66            ?96       $33                  ?2                  	;0
80  63   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
81  63   ASSIGN/38                 ?27       16?4                 $34                 	;0
82  64   NOP/0                     ?0        ?0                   ?0                  	;1
83  64   GOTO/253                  ?0        ?102                 ?56                 	;0
84  67   ECHO/40                   ?0        57:'                                    </td>
									<td class="text-center">' ?0                  	;0
85  68   FETCH_DIM_R/81            $36=      16?2                 58:'plex_ip'        	;0
86  68   ECHO/40                   ?0        $36                  ?0                  	;0
87  69   ECHO/40                   ?0        59:'</td>
									<td>' ?0                  	;0
88  70   FETCH_DIM_R/81            $37=      16?2                 60:'server_id'      	;0
89  70   FETCH_DIM_R/81            $38=      16?5                 $37                 	;0
90  70   FETCH_DIM_R/81            $39=      $38                  61:'server_name'    	;0
91  70   IS_SMALLER/19             #40=      62:0                 16?6                	;0
92  70   JMPZ/43                   ?0        #40                  ?97                 	;0	>>97
93  70   CONCAT/8                  #41=      63:'&nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' 16?6                	;0
94  70   CONCAT/8                  #42=      #41                  64:'</button>'      	;0
95  70   QM_ASSIGN/22              #43=      #42                  ?0                  	;0
96  70   JMP/42                    ?0        ?98                  ?0                  	;0	>>98
97  70   QM_ASSIGN/22              #43=      65:''                ?0                  	;0	<<92
98  70   CONCAT/8                  #44=      $39                  #43                 	;0	<<96
99  70   ECHO/40                   ?0        #44                  ?0                  	;0
100 71   NOP/0                     ?0        ?0                   ?0                  	;1
101 71   GOTO/253                  ?0        ?61                  ?66                 	;0
102 74   ASSIGN/38                 ?37       16?3                 67:'Unknown'        	;0
103 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'json_decode'    	;2
104 75   FETCH_DIM_FUNC_ARG/93     $46=      16?2                 70:'plex_libraries' 	;1
105 75   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
106 75   SEND_VAL_EX/116           ?96       71:true              ?2                  	;0
107 75   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
108 75   FE_RESET_R/77             $48=      $47                  ?130                	;0
109 75   FE_FETCH_R/78             ?0        $48                  16?7                	;130	>>130	<<129
110 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'intval'         	;1
111 76   FETCH_DIM_FUNC_ARG/93     $49=      16?7                 74:'key'            	;1
112 76   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
113 76   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
114 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'intval'         	;1
115 76   FETCH_DIM_FUNC_ARG/93     $51=      16?2                 77:'directory'      	;1
116 76   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
117 76   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
118 76   IS_EQUAL/17               #53=      $50                  $52                 	;0
119 76   BOOL_NOT/13               #54=      #53                  ?0                  	;0
120 76   JMPZ/43                   ?0        #54                  ?124                	;0	>>124
121 77   NOP/0                     ?0        ?0                   ?0                  	;1
122 77   NOP/0                     ?0        ?0                   ?0                  	;1
123 77   GOTO/253                  ?0        ?129                 ?78                 	;0
124 79   FETCH_DIM_R/81            $55=      16?7                 79:'title'          	;0	<<120
125 79   ASSIGN/38                 ?48       16?3                 $55                 	;0
126 80   FE_FREE/127               ?0        $48                  ?2                  	;1
127 80   NOP/0                     ?0        ?0                   ?0                  	;1
128 80   GOTO/253                  ?0        ?131                 ?80                 	;0
129 82   JMP/42                    ?0        ?109                 ?0                  	;0	>>109
130 82   FE_FREE/127               ?0        $48                  ?0                  	;0	<<108
131 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'is_null'        	;1
132 85   FETCH_DIM_FUNC_ARG/93     $57=      16?2                 83:'server_add'     	;1
133 85   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
134 85   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
135 85   JMPZ/43                   ?0        $58                  ?138                	;0	>>138
136 85   QM_ASSIGN/22              #59=      84:0                 ?0                  	;0
137 85   JMP/42                    ?0        ?147                 ?0                  	;0	>>147
138 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'count'          	;1	<<135
139 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'json_decode'    	;2
140 85   FETCH_DIM_FUNC_ARG/93     $60=      16?2                 89:'server_add'     	;1
141 85   SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
142 85   SEND_VAL_EX/116           ?96       90:true              ?2                  	;0
143 85   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
144 85   SEND_VAR_NO_REF_EX/50     ?80       $61                  ?1                  	;0
145 85   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
146 85   QM_ASSIGN/22              #59=      $62                  ?0                  	;0
147 85   ASSIGN/38                 ?55       16?6                 #59                 	;0	<<137
148 86   NOP/0                     ?0        ?0                   ?0                  	;1
149 86   GOTO/253                  ?0        ?150                 ?91                 	;0
150 88   ECHO/40                   ?0        92:'								<tr id="folder-' ?0                  	;0
151 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
152 89   FETCH_DIM_FUNC_ARG/93     $64=      16?2                 95:'id'             	;1
153 89   SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
154 89   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
155 89   ECHO/40                   ?0        $65                  ?0                  	;0
156 90   ECHO/40                   ?0        96:'">
									<td class="text-center">' ?0                  	;0
157 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'intval'         	;1
158 91   FETCH_DIM_FUNC_ARG/93     $66=      16?2                 99:'id'             	;1
159 91   SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
160 91   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
161 91   ECHO/40                   ?0        $67                  ?0                  	;0
162 92   ECHO/40                   ?0        100:'</td>
                                    <td class="text-center">
                                        ' ?0                  	;0
163 93   NOP/0                     ?0        ?0                   ?0                  	;1
164 93   GOTO/253                  ?0        ?51                  ?101                	;0
165 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'intval'        	;1
166 95   FETCH_DIM_FUNC_ARG/93     $68=      16?2                 104:'id'            	;1
167 95   SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
168 95   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
169 95   ECHO/40                   ?0        $69                  ?0                  	;0
170 96   ECHO/40                   ?0        105:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
171 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'intval'        	;1
172 97   FETCH_DIM_FUNC_ARG/93     $70=      16?2                 108:'id'            	;1
173 97   SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
174 97   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
175 97   ECHO/40                   ?0        $71                  ?0                  	;0
176 98   ECHO/40                   ?0        109:', \'force\');"><i class="mdi mdi-refresh"></i></button>
											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
177 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'intval'        	;1
178 99   FETCH_DIM_FUNC_ARG/93     $72=      16?2                 112:'id'            	;1
179 99   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
180 99   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
181 99   ECHO/40                   ?0        $73                  ?0                  	;0
182 100  NOP/0                     ?0        ?0                   ?0                  	;1
183 100  GOTO/253                  ?0        ?184                 ?113                	;0
184 102  ECHO/40                   ?0        114:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
185 104  NOP/0                     ?0        ?0                   ?0                  	;1
186 104  GOTO/253                  ?0        ?187                 ?115                	;0
187 105  JMP/42                    ?0        ?48                  ?0                  	;0	>>48
188 105  FE_FREE/127               ?0        $28                  ?0                  	;0	<<47
189 108  GOTO/253                  ?0        ?41                  ?116                	;0
190 110  INCLUDE_OR_EVAL/73        ?66       117:'footer.php'     ?0                  	;2
191 111  NOP/0                     ?0        118:1                ?0                  	;4294967295
*/

?>