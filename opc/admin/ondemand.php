<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?32                  ?0                  	;0	>>32
1   5    ECHO/40                   ?0        1:'					</div>
					<h4 class="page-title">On-Demand Scanner</h4>
				</div>
			</div>
		</div>       
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
2   6    FETCH_STATIC_PROP_R/173   $6=       2:'rSettings'        3:'XUI'             	;0
3   6    FETCH_DIM_R/81            $7=       $6                   5:'on_demand_checker'	;0
4   6    JMPZ/43                   ?0        $7                   ?6                  	;0	>>6
5   7    GOTO/253                  ?0        ?7                   ?6                  	;0
6   9    ECHO/40                   ?0        7:'				<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    On-Demand Scanner isn\'t active, please enable it in the <a href="settings">Settings</a> menu to continue.
				</div>
				' ?0                  	;0	<<4
7   11   ECHO/40                   ?0        8:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
							<div class="col-md-3">
								<input type="text" class="form-control" id="search" value="" placeholder="Search Streams...">
							</div>
							<div class="col-md-3">
                                <select id="server" class="form-control" data-toggle="select2">
                                    <option value="" selected>All Servers</option>
                                    ' ?0                  	;0
8   12   GOTO/253                  ?0        ?38                  ?9                  	;0
9   14   FETCH_DIM_R/81            $8=       16?0                 10:'no_filter'      	;0
10  14   ECHO/40                   ?0        $8                   ?0                  	;0
11  15   ECHO/40                   ?0        11:'</option>
                                    <option value="1"' ?0                  	;0
12  16   FETCH_STATIC_PROP_IS/176  $9=       12:'rRequest'        13:'XUI'            	;0
13  16   ISSET_ISEMPTY_DIM_OBJ/115 #10=      $9                   15:'filter'         	;33554432
14  16   JMPZ_EX/46                #10=      #10                  ?19                 	;0	>>19
15  16   FETCH_STATIC_PROP_R/173   $11=      16:'rRequest'        17:'XUI'            	;0
16  16   FETCH_DIM_R/81            $12=      $11                  19:'filter'         	;0
17  16   IS_EQUAL/17               #13=      $12                  20:1                	;0
18  16   BOOL/52                   #10=      #13                  ?0                  	;0
19  16   BOOL_NOT/13               #14=      #10                  ?0                  	;0	<<14
20  16   JMPZ/43                   ?0        #14                  ?22                 	;0	>>22
21  17   GOTO/253                  ?0        ?23                  ?21                 	;0
22  19   ECHO/40                   ?0        22:' selected'       ?0                  	;0	<<20
23  21   GOTO/253                  ?0        ?145                 ?23                 	;0
24  23   ECHO/40                   ?0        24:'                                </select>
                            </div>
							<div class="col-md-2">
                                <select id="filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
25  24   FETCH_STATIC_PROP_IS/176  $15=      25:'rRequest'        26:'XUI'            	;0
26  24   ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  28:'filter'         	;33554432
27  24   JMPZ/43                   ?0        #16                  ?29                 	;0	>>29
28  25   GOTO/253                  ?0        ?30                  ?29                 	;0
29  27   ECHO/40                   ?0        30:' selected'       ?0                  	;0	<<27
30  29   ECHO/40                   ?0        31:'>'               ?0                  	;0
31  30   GOTO/253                  ?0        ?9                   ?32                 	;0
32  32   INCLUDE_OR_EVAL/73        ?11       33:'session.php'     ?0                  	;2	<<0
33  33   INCLUDE_OR_EVAL/73        ?12       34:'functions.php'   ?0                  	;2
34  34   ASSIGN/38                 ?13       16?1                 35:'On-Demand Scanner'	;0
35  35   INCLUDE_OR_EVAL/73        ?14       36:'header.php'      ?0                  	;2
36  36   ECHO/40                   ?0        37:'<div class="wrapper"' ?0                  	;0
37  37   GOTO/253                  ?0        ?127                 ?38                 	;0
38  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'c6A90BfcD425EB63'	;0
39  39   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
40  39   FE_RESET_R/77             $22=      $21                  ?64                 	;0
41  39   FE_FETCH_R/78             ?0        $22                  16?2                	;64	>>64	<<63
42  40   ECHO/40                   ?0        41:'                                    <option value="' ?0                  	;0
43  41   FETCH_DIM_R/81            $23=      16?2                 42:'id'             	;0
44  41   ECHO/40                   ?0        $23                  ?0                  	;0
45  42   ECHO/40                   ?0        43:'"'               ?0                  	;0
46  43   FETCH_STATIC_PROP_IS/176  $24=      44:'rRequest'        45:'XUI'            	;0
47  43   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  47:'server'         	;33554432
48  43   JMPZ_EX/46                #25=      #25                  ?54                 	;0	>>54
49  43   FETCH_STATIC_PROP_R/173   $26=      48:'rRequest'        49:'XUI'            	;0
50  43   FETCH_DIM_R/81            $27=      $26                  51:'server'         	;0
51  43   FETCH_DIM_R/81            $28=      16?2                 52:'id'             	;0
52  43   IS_EQUAL/17               #29=      $27                  $28                 	;0
53  43   BOOL/52                   #25=      #29                  ?0                  	;0
54  43   BOOL_NOT/13               #30=      #25                  ?0                  	;0	<<48
55  43   JMPZ/43                   ?0        #30                  ?58                 	;0	>>58
56  44   NOP/0                     ?0        ?0                   ?0                  	;1
57  44   GOTO/253                  ?0        ?59                  ?53                 	;0
58  46   ECHO/40                   ?0        54:' selected'       ?0                  	;0	<<55
59  48   ECHO/40                   ?0        55:'>'               ?0                  	;0
60  49   FETCH_DIM_R/81            $31=      16?2                 56:'server_name'    	;0
61  49   ECHO/40                   ?0        $31                  ?0                  	;0
62  50   ECHO/40                   ?0        57:'</option>
                                    ' ?0                  	;0
63  51   JMP/42                    ?0        ?41                  ?0                  	;0	>>41
64  51   FE_FREE/127               ?0        $22                  ?0                  	;0	<<40
65  54   ECHO/40                   ?0        58:'                                </select>
                            </div>
							<div class="col-md-2">
                                <select id="category" class="form-control" data-toggle="select2">
                                    <option value="" selected>All Categories</option>
                                    ' ?0                  	;0
66  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'f769E3F0C739d1A6'	;1
67  55   SEND_VAL_EX/116           ?80       61:'live'            ?1                  	;0
68  55   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
69  55   FE_RESET_R/77             $33=      $32                  ?93                 	;0
70  55   FE_FETCH_R/78             ?0        $33                  16?3                	;93	>>93	<<92
71  56   ECHO/40                   ?0        62:'                                    <option value="' ?0                  	;0
72  57   FETCH_DIM_R/81            $34=      16?3                 63:'id'             	;0
73  57   ECHO/40                   ?0        $34                  ?0                  	;0
74  58   ECHO/40                   ?0        64:'"'               ?0                  	;0
75  59   FETCH_STATIC_PROP_IS/176  $35=      65:'rRequest'        66:'XUI'            	;0
76  59   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  68:'category'       	;33554432
77  59   JMPZ_EX/46                #36=      #36                  ?83                 	;0	>>83
78  59   FETCH_STATIC_PROP_R/173   $37=      69:'rRequest'        70:'XUI'            	;0
79  59   FETCH_DIM_R/81            $38=      $37                  72:'category'       	;0
80  59   FETCH_DIM_R/81            $39=      16?3                 73:'id'             	;0
81  59   IS_EQUAL/17               #40=      $38                  $39                 	;0
82  59   BOOL/52                   #36=      #40                  ?0                  	;0
83  59   BOOL_NOT/13               #41=      #36                  ?0                  	;0	<<77
84  59   JMPZ/43                   ?0        #41                  ?87                 	;0	>>87
85  60   NOP/0                     ?0        ?0                   ?0                  	;1
86  60   GOTO/253                  ?0        ?88                  ?74                 	;0
87  62   ECHO/40                   ?0        75:' selected'       ?0                  	;0	<<84
88  64   ECHO/40                   ?0        76:'>'               ?0                  	;0
89  65   FETCH_DIM_R/81            $42=      16?3                 77:'category_name'  	;0
90  65   ECHO/40                   ?0        $42                  ?0                  	;0
91  66   ECHO/40                   ?0        78:'</option>
                                    ' ?0                  	;0
92  67   JMP/42                    ?0        ?70                  ?0                  	;0	>>70
93  67   FE_FREE/127               ?0        $33                  ?0                  	;0	<<69
94  70   GOTO/253                  ?0        ?24                  ?79                 	;0
95  72   FETCH_STATIC_PROP_IS/176  $43=      80:'rRequest'        81:'XUI'            	;0
96  72   ISSET_ISEMPTY_DIM_OBJ/115 #44=      $43                  83:'filter'         	;33554432
97  72   JMPZ_EX/46                #44=      #44                  ?102                	;0	>>102
98  72   FETCH_STATIC_PROP_R/173   $45=      84:'rRequest'        85:'XUI'            	;0
99  72   FETCH_DIM_R/81            $46=      $45                  87:'filter'         	;0
100 72   IS_EQUAL/17               #47=      $46                  88:3                	;0
101 72   BOOL/52                   #44=      #47                  ?0                  	;0
102 72   BOOL_NOT/13               #48=      #44                  ?0                  	;0	<<97
103 72   JMPZ/43                   ?0        #48                  ?105                	;0	>>105
104 73   GOTO/253                  ?0        ?106                 ?89                 	;0
105 75   ECHO/40                   ?0        90:' selected'       ?0                  	;0	<<103
106 77   ECHO/40                   ?0        91:'>Not Scanned</option>
                                </select>
                            </div>
							<label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
107 78   FE_RESET_R/77             $49=      92:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?123                	;0
108 78   FE_FETCH_R/78             ?0        $49                  16?4                	;123	>>123	<<122
109 79   ECHO/40                   ?0        93:'									<option' ?0                  	;0
110 80   FETCH_DIM_R/81            $50=      16?5                 94:'default_entries'	;0
111 80   IS_EQUAL/17               #51=      $50                  16?4                	;0
112 80   BOOL_NOT/13               #52=      #51                  ?0                  	;0
113 80   JMPZ/43                   ?0        #52                  ?116                	;0	>>116
114 81   NOP/0                     ?0        ?0                   ?0                  	;1
115 81   GOTO/253                  ?0        ?117                 ?95                 	;0
116 83   ECHO/40                   ?0        96:' selected'       ?0                  	;0	<<113
117 85   ECHO/40                   ?0        97:' value="'        ?0                  	;0
118 86   ECHO/40                   ?0        16?4                 ?0                  	;0
119 87   ECHO/40                   ?0        98:'">'              ?0                  	;0
120 88   ECHO/40                   ?0        16?4                 ?0                  	;0
121 89   ECHO/40                   ?0        99:'</option>
									' ?0                  	;0
122 90   JMP/42                    ?0        ?108                 ?0                  	;0	>>108
123 90   FE_FREE/127               ?0        $49                  ?0                  	;0	<<107
124 92   GOTO/253                  ?0        ?125                 ?100                	;0
125 95   ECHO/40                   ?0        101:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th class="text-center">Icon</th>
									<th>Stream</th>
									<th>Server</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Response</th>
                                    <th class="text-center">Stream Info</th>
									<th class="text-center">Last Scanned</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

					</div> 
				</div> 
			</div>
		</div>
    </div>
</div>
' ?0                  	;0
126 96   GOTO/253                  ?0        ?159                 ?102                	;0
127 98   FETCH_IS/89               $53=      103:'_SERVER'        ?0                  	;0
128 98   ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  104:'HTTP_X_REQUESTED_WITH'	;16777216
129 98   BOOL_NOT/13               #55=      #54                  ?0                  	;0
130 98   JMPZ_EX/46                #55=      #55                  ?138                	;0	>>138
131 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'strtolower'    	;1
132 98   FETCH_FUNC_ARG/92         $56=      107:'_SERVER'        ?0                  	;1
133 98   FETCH_DIM_FUNC_ARG/93     $57=      $56                  108:'HTTP_X_REQUESTED_WITH'	;1
134 98   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
135 98   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
136 98   IS_EQUAL/17               #59=      $58                  109:'xmlhttprequest'	;0
137 98   BOOL/52                   #55=      #59                  ?0                  	;0
138 98   BOOL_NOT/13               #60=      #55                  ?0                  	;0	<<130
139 98   JMPZ/43                   ?0        #60                  ?141                	;0	>>141
140 99   GOTO/253                  ?0        ?142                 ?110                	;0
141 101  ECHO/40                   ?0        111:' style="display: none;"' ?0                  	;0	<<139
142 103  ECHO/40                   ?0        112:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
143 104  INCLUDE_OR_EVAL/73        ?55       113:'topbar.php'     ?0                  	;2
144 105  GOTO/253                  ?0        ?1                   ?114                	;0
145 107  ECHO/40                   ?0        115:'>Ready</option>
                                    <option value="2"' ?0                  	;0
146 108  FETCH_STATIC_PROP_IS/176  $62=      116:'rRequest'       117:'XUI'           	;0
147 108  ISSET_ISEMPTY_DIM_OBJ/115 #63=      $62                  119:'filter'        	;33554432
148 108  JMPZ_EX/46                #63=      #63                  ?153                	;0	>>153
149 108  FETCH_STATIC_PROP_R/173   $64=      120:'rRequest'       121:'XUI'           	;0
150 108  FETCH_DIM_R/81            $65=      $64                  123:'filter'        	;0
151 108  IS_EQUAL/17               #66=      $65                  124:2               	;0
152 108  BOOL/52                   #63=      #66                  ?0                  	;0
153 108  BOOL_NOT/13               #67=      #63                  ?0                  	;0	<<148
154 108  JMPZ/43                   ?0        #67                  ?156                	;0	>>156
155 109  GOTO/253                  ?0        ?157                 ?125                	;0
156 111  ECHO/40                   ?0        126:' selected'      ?0                  	;0	<<154
157 113  ECHO/40                   ?0        127:'>Down</option>
                                    <option value="3"' ?0                  	;0
158 114  GOTO/253                  ?0        ?95                  ?128                	;0
159 116  INCLUDE_OR_EVAL/73        ?62       129:'footer.php'     ?0                  	;2
160 117  NOP/0                     ?0        130:1                ?0                  	;4294967295
*/

?>