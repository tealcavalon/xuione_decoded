<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?186                 ?0                  	;0	>>186
1   5    ECHO/40                   ?0        1:'</option>
                                                ' ?0                  	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'f769E3F0C739D1A6'	;1
3   6    SEND_VAL_EX/116           ?80       4:'live'             ?1                  	;0
4   6    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
5   6    FE_RESET_R/77             $6=       $5                   ?29                 	;0
6   6    FE_FETCH_R/78             ?0        $6                   16?0                	;29	>>29	<<28
7   7    ECHO/40                   ?0        5:'                                                <option value="' ?0                  	;0
8   8    FETCH_DIM_R/81            $7=       16?0                 6:'id'              	;0
9   8    ECHO/40                   ?0        $7                   ?0                  	;0
10  9    ECHO/40                   ?0        7:'"'                ?0                  	;0
11  10   FETCH_STATIC_PROP_IS/176  $8=       8:'rRequest'         9:'XUI'             	;0
12  10   ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   11:'category'       	;33554432
13  10   JMPZ_EX/46                #9=       #9                   ?19                 	;0	>>19
14  10   FETCH_STATIC_PROP_R/173   $10=      12:'rRequest'        13:'XUI'            	;0
15  10   FETCH_DIM_R/81            $11=      $10                  15:'category'       	;0
16  10   FETCH_DIM_R/81            $12=      16?0                 16:'id'             	;0
17  10   IS_EQUAL/17               #13=      $11                  $12                 	;0
18  10   BOOL/52                   #9=       #13                  ?0                  	;0
19  10   BOOL_NOT/13               #14=      #9                   ?0                  	;0	<<13
20  10   JMPZ/43                   ?0        #14                  ?23                 	;0	>>23
21  11   NOP/0                     ?0        ?0                   ?0                  	;1
22  11   GOTO/253                  ?0        ?24                  ?17                 	;0
23  13   ECHO/40                   ?0        18:' selected'       ?0                  	;0	<<20
24  15   ECHO/40                   ?0        19:'>'               ?0                  	;0
25  16   FETCH_DIM_R/81            $15=      16?0                 20:'category_name'  	;0
26  16   ECHO/40                   ?0        $15                  ?0                  	;0
27  17   ECHO/40                   ?0        21:'</option>
                                                ' ?0                  	;0
28  18   JMP/42                    ?0        ?6                   ?0                  	;0	>>6
29  18   FE_FREE/127               ?0        $6                   ?0                  	;0	<<5
30  21   ECHO/40                   ?0        22:'                                            </select>
                                        </div>
                                        <label class="col-md-1 col-2 col-form-label text-center" for="show_entries">' ?0                  	;0
31  22   FETCH_DIM_R/81            $16=      16?1                 23:'show'           	;0
32  22   ECHO/40                   ?0        $16                  ?0                  	;0
33  23   GOTO/253                  ?0        ?96                  ?24                 	;0
34  25   FETCH_STATIC_PROP_R/173   $17=      25:'rSettings'       26:'XUI'            	;0
35  25   FETCH_DIM_R/81            $18=      $17                  28:'redis_handler'  	;0
36  25   JMPZ/43                   ?0        $18                  ?38                 	;0	>>38
37  26   GOTO/253                  ?0        ?89                  ?29                 	;0
38  28   ECHO/40                   ?0        30:'										<div class="col-md-5 col-6">
                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="' ?0                  	;0	<<36
39  29   FETCH_DIM_R/81            $19=      16?1                 31:'search_streams' 	;0
40  29   ECHO/40                   ?0        $19                  ?0                  	;0
41  30   ECHO/40                   ?0        32:'...">
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <select id="category_search" class="form-control" data-toggle="select2">
                                                <option value="" selected>' ?0                  	;0
42  31   FETCH_DIM_R/81            $20=      16?1                 33:'all_categories' 	;0
43  31   ECHO/40                   ?0        $20                  ?0                  	;0
44  32   GOTO/253                  ?0        ?1                   ?34                 	;0
45  34   ECHO/40                   ?0        35:'</label>
                                        <div class="col-md-1 col-2">
                                            <input type="text" class="form-control text-center" id="font_size" value="36" placeholder="">
                                        </div>
                                        <label class="col-md-1 col-2 col-form-label text-center" for="font_color">' ?0                  	;0
46  35   FETCH_DIM_R/81            $21=      16?1                 36:'colour'         	;0
47  35   ECHO/40                   ?0        $21                  ?0                  	;0
48  36   ECHO/40                   ?0        37:'</label>
                                        <div class="col-md-2 col-2">
                                            <input type="text" id="font_color" class="form-control text-center" value="#ffffff">
                                        </div>
                                        <label class="col-md-1 col-2 col-form-label text-center" for="position">' ?0                  	;0
49  37   FETCH_DIM_R/81            $22=      16?1                 38:'position'       	;0
50  37   ECHO/40                   ?0        $22                  ?0                  	;0
51  38   ECHO/40                   ?0        39:'</label>
                                        <div class="col-md-1 col-2">
                                            <input type="text" class="form-control text-center" id="position_x" value="10" placeholder="X">
                                        </div>
                                        <div class="col-md-1 col-2">
                                            <input type="text" class="form-control text-center" id="position_y" value="10" placeholder="Y">
                                        </div>
                                        <div class="col-md-1 col-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light" onClick="activateFingerprint()">
                                                <i class="mdi mdi-fingerprint"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-2" style="margin-top:10px;display:none;" id="custom_message_div">
                                            <input type="text" class="form-control" id="custom_message" value="" placeholder="' ?0                  	;0
52  39   GOTO/253                  ?0        ?179                 ?40                 	;0
53  41   ASSIGN/38                 ?18       16?2                 41:'Fingerprint Stream'	;0
54  42   INCLUDE_OR_EVAL/73        ?19       42:'header.php'      ?0                  	;2
55  43   ECHO/40                   ?0        43:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
56  44   FETCH_IS/89               $25=      44:'_SERVER'         ?0                  	;0
57  44   ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  45:'HTTP_X_REQUESTED_WITH'	;16777216
58  44   BOOL_NOT/13               #27=      #26                  ?0                  	;0
59  44   JMPZ_EX/46                #27=      #27                  ?67                 	;0	>>67
60  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'strtolower'     	;1
61  44   FETCH_FUNC_ARG/92         $28=      48:'_SERVER'         ?0                  	;1
62  44   FETCH_DIM_FUNC_ARG/93     $29=      $28                  49:'HTTP_X_REQUESTED_WITH'	;1
63  44   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
64  44   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
65  44   IS_EQUAL/17               #31=      $30                  50:'xmlhttprequest' 	;0
66  44   BOOL/52                   #27=      #31                  ?0                  	;0
67  44   BOOL_NOT/13               #32=      #27                  ?0                  	;0	<<59
68  44   JMPZ/43                   ?0        #32                  ?70                 	;0	>>70
69  45   GOTO/253                  ?0        ?126                 ?51                 	;0
70  47   ECHO/40                   ?0        52:' style="display: none;"' ?0                  	;0	<<68
71  48   GOTO/253                  ?0        ?126                 ?53                 	;0
72  50   FETCH_DIM_R/81            $33=      16?1                 54:'category'       	;0
73  50   ECHO/40                   ?0        $33                  ?0                  	;0
74  51   ECHO/40                   ?0        55:'</th>
                                                    <th class="text-center">' ?0                  	;0
75  52   FETCH_DIM_R/81            $34=      16?1                 56:'clients'        	;0
76  52   ECHO/40                   ?0        $34                  ?0                  	;0
77  53   ECHO/40                   ?0        57:'</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="stream-activity">
                                    <div class="row">
                                        <div class="alert alert-warning alert-dismissible fade show col-md-12 col-12 text-center" role="alert">
                                            ' ?0                  	;0
78  54   FETCH_DIM_R/81            $35=      16?1                 58:'warning_fingerprint'	;0
79  54   ECHO/40                   ?0        $35                  ?0                  	;0
80  55   GOTO/253                  ?0        ?132                 ?59                 	;0
81  57   ECHO/40                   ?0        60:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
                        <div id="basicwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                <li class="nav-item" id="stream-selection-tab">
                                    <a href="#stream-selection" id="stream-selection-nav" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                        <i class="mdi mdi-play mr-1"></i>
                                        <span class="d-none d-sm-inline">' ?0                  	;0
82  58   FETCH_DIM_R/81            $36=      16?1                 61:'stream'         	;0
83  58   ECHO/40                   ?0        $36                  ?0                  	;0
84  59   ECHO/40                   ?0        62:'</span>
                                    </a>
                                </li>
                                <li class="nav-item disabled" id="stream-activity-tab">
                                    <a href="#stream-activity" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                        <i class="mdi mdi-account-group mr-1"></i>
                                        <span class="d-none d-sm-inline">' ?0                  	;0
85  60   FETCH_DIM_R/81            $37=      16?1                 63:'activity'       	;0
86  60   ECHO/40                   ?0        $37                  ?0                  	;0
87  61   ECHO/40                   ?0        64:'</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content b-0 mb-0 pt-0">
                                <div class="tab-pane" id="stream-selection">
                                    <div class="row">
										' ?0                  	;0
88  62   GOTO/253                  ?0        ?34                  ?65                 	;0
89  65   ECHO/40                   ?0        66:'                                        <div class="col-md-6 col-6">
                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="' ?0                  	;0
90  66   FETCH_DIM_R/81            $38=      16?1                 67:'search_streams' 	;0
91  66   ECHO/40                   ?0        $38                  ?0                  	;0
92  67   ECHO/40                   ?0        68:'...">
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <select id="category_search" class="form-control" data-toggle="select2">
                                                <option value="" selected>' ?0                  	;0
93  68   FETCH_DIM_R/81            $39=      16?1                 69:'all_categories' 	;0
94  68   ECHO/40                   ?0        $39                  ?0                  	;0
95  69   GOTO/253                  ?0        ?140                 ?70                 	;0
96  71   ECHO/40                   ?0        71:'</label>
                                        <div class="col-md-2 col-8">
                                            <select id="show_entries" class="form-control" data-toggle="select2">
                                                ' ?0                  	;0
97  72   FE_RESET_R/77             $40=      72:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?113                	;0
98  72   FE_FETCH_R/78             ?0        $40                  16?3                	;113	>>113	<<112
99  73   ECHO/40                   ?0        73:'                                                <option' ?0                  	;0
100 74   FETCH_DIM_R/81            $41=      16?4                 74:'default_entries'	;0
101 74   IS_EQUAL/17               #42=      $41                  16?3                	;0
102 74   BOOL_NOT/13               #43=      #42                  ?0                  	;0
103 74   JMPZ/43                   ?0        #43                  ?106                	;0	>>106
104 75   NOP/0                     ?0        ?0                   ?0                  	;1
105 75   GOTO/253                  ?0        ?107                 ?75                 	;0
106 77   ECHO/40                   ?0        76:' selected'       ?0                  	;0	<<103
107 79   ECHO/40                   ?0        77:' value="'        ?0                  	;0
108 80   ECHO/40                   ?0        16?3                 ?0                  	;0
109 81   ECHO/40                   ?0        78:'">'              ?0                  	;0
110 82   ECHO/40                   ?0        16?3                 ?0                  	;0
111 83   ECHO/40                   ?0        79:'</option>
                                                ' ?0                  	;0
112 84   JMP/42                    ?0        ?98                  ?0                  	;0	>>98
113 84   FE_FREE/127               ?0        $40                  ?0                  	;0	<<97
114 87   ECHO/40                   ?0        80:'                                            </select>
                                        </div>
										' ?0                  	;0
115 88   GOTO/253                  ?0        ?170                 ?81                 	;0
116 89   GOTO/253                  ?0        ?89                  ?82                 	;0
117 91   FETCH_DIM_R/81            $44=      16?1                 83:'username'       	;0
118 91   ECHO/40                   ?0        $44                  ?0                  	;0
119 92   ECHO/40                   ?0        84:'</option>
                                                <option value="3">' ?0                  	;0
120 93   FETCH_DIM_R/81            $45=      16?1                 85:'message'        	;0
121 93   ECHO/40                   ?0        $45                  ?0                  	;0
122 94   ECHO/40                   ?0        86:'</option>
                                            </select>
                                        </div>
                                        <label class="col-md-1 col-2 col-form-label text-center" for="font_size">' ?0                  	;0
123 95   FETCH_DIM_R/81            $46=      16?1                 87:'size'           	;0
124 95   ECHO/40                   ?0        $46                  ?0                  	;0
125 96   GOTO/253                  ?0        ?45                  ?88                 	;0
126 99   ECHO/40                   ?0        89:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
127 100  INCLUDE_OR_EVAL/73        ?42       90:'topbar.php'      ?0                  	;2
128 101  ECHO/40                   ?0        91:'					</div>
					<h4 class="page-title">' ?0                  	;0
129 102  FETCH_DIM_R/81            $48=      16?1                 92:'fingerprint_stream'	;0
130 102  ECHO/40                   ?0        $48                  ?0                  	;0
131 103  GOTO/253                  ?0        ?81                  ?93                 	;0
132 105  ECHO/40                   ?0        94:'                                        </div>
                                    </div>
                                    <div class="row" id="filter_selection">
                                        <label class="col-md-1 col-2 col-form-label text-center" for="fingerprint_type">' ?0                  	;0
133 106  FETCH_DIM_R/81            $49=      16?1                 95:'type'           	;0
134 106  ECHO/40                   ?0        $49                  ?0                  	;0
135 107  ECHO/40                   ?0        96:'</label>
                                        <div class="col-md-2 col-6">
                                            <select id="fingerprint_type" class="form-control text-center" data-toggle="select2">
                                                <option value="1">' ?0                  	;0
136 108  FETCH_DIM_R/81            $50=      16?1                 97:'activity_id'    	;0
137 108  ECHO/40                   ?0        $50                  ?0                  	;0
138 109  ECHO/40                   ?0        98:'</option>
                                                <option value="2">' ?0                  	;0
139 110  GOTO/253                  ?0        ?117                 ?99                 	;0
140 112  ECHO/40                   ?0        100:'</option>
                                                ' ?0                  	;0
141 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'F769E3F0c739D1a6'	;1
142 113  SEND_VAL_EX/116           ?80       103:'live'           ?1                  	;0
143 113  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
144 113  FE_RESET_R/77             $52=      $51                  ?168                	;0
145 113  FE_FETCH_R/78             ?0        $52                  16?0                	;168	>>168	<<167
146 114  ECHO/40                   ?0        104:'                                                <option value="' ?0                  	;0
147 115  FETCH_DIM_R/81            $53=      16?0                 105:'id'            	;0
148 115  ECHO/40                   ?0        $53                  ?0                  	;0
149 116  ECHO/40                   ?0        106:'"'              ?0                  	;0
150 117  FETCH_STATIC_PROP_IS/176  $54=      107:'rRequest'       108:'XUI'           	;0
151 117  ISSET_ISEMPTY_DIM_OBJ/115 #55=      $54                  110:'category'      	;33554432
152 117  JMPZ_EX/46                #55=      #55                  ?158                	;0	>>158
153 117  FETCH_STATIC_PROP_R/173   $56=      111:'rRequest'       112:'XUI'           	;0
154 117  FETCH_DIM_R/81            $57=      $56                  114:'category'      	;0
155 117  FETCH_DIM_R/81            $58=      16?0                 115:'id'            	;0
156 117  IS_EQUAL/17               #59=      $57                  $58                 	;0
157 117  BOOL/52                   #55=      #59                  ?0                  	;0
158 117  BOOL_NOT/13               #60=      #55                  ?0                  	;0	<<152
159 117  JMPZ/43                   ?0        #60                  ?162                	;0	>>162
160 118  NOP/0                     ?0        ?0                   ?0                  	;1
161 118  GOTO/253                  ?0        ?163                 ?116                	;0
162 120  ECHO/40                   ?0        117:' selected'      ?0                  	;0	<<159
163 122  ECHO/40                   ?0        118:'>'              ?0                  	;0
164 123  FETCH_DIM_R/81            $61=      16?0                 119:'category_name' 	;0
165 123  ECHO/40                   ?0        $61                  ?0                  	;0
166 124  ECHO/40                   ?0        120:'</option>
                                                ' ?0                  	;0
167 125  JMP/42                    ?0        ?145                 ?0                  	;0	>>145
168 125  FE_FREE/127               ?0        $52                  ?0                  	;0	<<144
169 128  ECHO/40                   ?0        121:'                                            </select>
                                        </div>
										' ?0                  	;0
170 130  GOTO/253                  ?0        ?171                 ?122                	;0
171 132  ECHO/40                   ?0        123:'                                        <table id="datatable-md1" class="table table-striped table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">' ?0                  	;0
172 133  FETCH_DIM_R/81            $62=      16?1                 124:'id'            	;0
173 133  ECHO/40                   ?0        $62                  ?0                  	;0
174 134  ECHO/40                   ?0        125:'</th>
                                                    <th>' ?0                  	;0
175 135  FETCH_DIM_R/81            $63=      16?1                 126:'stream_name'   	;0
176 135  ECHO/40                   ?0        $63                  ?0                  	;0
177 136  ECHO/40                   ?0        127:'</th>
                                                    <th>' ?0                  	;0
178 137  GOTO/253                  ?0        ?72                  ?128                	;0
179 139  FETCH_DIM_R/81            $64=      16?1                 129:'custom_message'	;0
180 139  ECHO/40                   ?0        $64                  ?0                  	;0
181 140  ECHO/40                   ?0        130:'">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table id="datatable-md2" class="table table-striped table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Username</th>
                                                    <th>Stream</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-center">IP</th>
                                                    <th class="text-center">Duration</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-center">' ?0                  	;0
182 141  FETCH_DIM_R/81            $65=      16?1                 131:'actions'       	;0
183 141  ECHO/40                   ?0        $65                  ?0                  	;0
184 142  ECHO/40                   ?0        132:'</th>
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
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
185 143  GOTO/253                  ?0        ?195                 ?133                	;0
186 145  INCLUDE_OR_EVAL/73        ?61       134:'session.php'    ?0                  	;2	<<0
187 146  INCLUDE_OR_EVAL/73        ?62       135:'functions.php'  ?0                  	;2
188 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'E6d500e19634D513'	;0
189 147  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
190 147  JMPZ/43                   ?0        $68                  ?192                	;0	>>192
191 148  GOTO/253                  ?0        ?194                 ?138                	;0
192 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'E72f42a93714bA87'	;0	<<190
193 150  DO_FCALL_BY_NAME/131      ?64       ?0                   ?0                  	;0
194 152  GOTO/253                  ?0        ?53                  ?141                	;0
195 154  INCLUDE_OR_EVAL/73        ?65       142:'footer.php'     ?0                  	;2
196 155  NOP/0                     ?0        143:1                ?0                  	;4294967295
*/

?>