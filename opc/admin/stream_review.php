<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?236                 ?0                  	;0	>>236
1   6    ECHO/40                   ?0        1:'                                            </select>
                                        </div>
                                        <div class="col-md-1 col-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()">
                                                <i class="mdi mdi-selection"></i>
                                            </button>
                                        </div>
                                        <table id="datatable-mass" class="table table-borderless mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th>Stream Name</th>
                                                    <th>Category</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ' ?0                  	;0
2   7    GOTO/253                  ?0        ?611                 ?2                  	;0
3   9    ECHO/40                   ?0        3:'                        <input type="hidden" name="save_changes" value="1" />
                        <input type="hidden" name="save_categories" value="' ?0                  	;0
4   10   GOTO/253                  ?0        ?834                 ?4                  	;0
5   13   ECHO/40                   ?0        5:'                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0
6   14   FE_RESET_R/77             $28=      16?0                 ?169                	;0
7   14   FE_FETCH_R/78             ?0        $28                  16?1                	;169	>>169	<<168
8   15   NOP/0                     ?0        ?0                   ?0                  	;1
9   15   GOTO/253                  ?0        ?105                 ?6                  	;0
10  17   ECHO/40                   ?0        7:'                                            <td>
                                                <select id="epg_api_' ?0                  	;0
11  18   FETCH_DIM_R/81            $29=      16?1                 8:'id'              	;0
12  18   ECHO/40                   ?0        $29                  ?0                  	;0
13  19   ECHO/40                   ?0        9:'" data-id="'      ?0                  	;0
14  20   FETCH_DIM_R/81            $30=      16?1                 10:'id'             	;0
15  20   ECHO/40                   ?0        $30                  ?0                  	;0
16  21   ECHO/40                   ?0        11:'" class="form-control epg_api" data-toggle="select2"></select>
                                            </td>
                                            <td style="width: 80px;">
                                                <input type="text" class="form-control text-center" id="epg_lang_' ?0                  	;0
17  22   NOP/0                     ?0        ?0                   ?0                  	;1
18  22   GOTO/253                  ?0        ?22                  ?12                 	;0
19  25   ECHO/40                   ?0        13:'                                        </tr>
                                        ' ?0                  	;0
20  27   NOP/0                     ?0        ?0                   ?0                  	;1
21  27   GOTO/253                  ?0        ?168                 ?14                 	;0
22  29   FETCH_DIM_R/81            $31=      16?1                 15:'id'             	;0
23  29   ECHO/40                   ?0        $31                  ?0                  	;0
24  30   ECHO/40                   ?0        16:'" readonly value=""></input>
                                            </td>
                                            <td class="text-center">
                                                <button onClick="clearEPG(this);" id="clear_epg_' ?0                  	;0
25  31   FETCH_DIM_R/81            $32=      16?1                 17:'id'             	;0
26  31   ECHO/40                   ?0        $32                  ?0                  	;0
27  32   ECHO/40                   ?0        18:'" data-id="'     ?0                  	;0
28  33   FETCH_DIM_R/81            $33=      16?1                 19:'id'             	;0
29  33   ECHO/40                   ?0        $33                  ?0                  	;0
30  34   NOP/0                     ?0        ?0                   ?0                  	;1
31  34   GOTO/253                  ?0        ?96                  ?20                 	;0
32  36   FE_RESET_R/77             $34=      16?2                 ?55                 	;0
33  36   FE_FETCH_R/78             ?0        $34                  16?3                	;55	>>55	<<54
34  37   ECHO/40                   ?0        21:'                                                    <option ' ?0                  	;0
35  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'in_array'       	;2
36  38   FETCH_DIM_FUNC_ARG/93     $35=      16?3                 24:'id'             	;1
37  38   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
38  38   FETCH_DIM_FUNC_ARG/93     $36=      16?1                 25:'category'       	;2
39  38   SEND_VAR_EX/66            ?96       $36                  ?2                  	;0
40  38   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
41  38   BOOL_NOT/13               #38=      $37                  ?0                  	;0
42  38   JMPZ/43                   ?0        #38                  ?46                 	;0	>>46
43  39   NOP/0                     ?0        ?0                   ?0                  	;1
44  39   NOP/0                     ?0        ?0                   ?0                  	;1
45  39   GOTO/253                  ?0        ?47                  ?26                 	;0
46  41   ECHO/40                   ?0        27:'selected '       ?0                  	;0	<<42
47  43   ECHO/40                   ?0        28:'value="'         ?0                  	;0
48  44   FETCH_DIM_R/81            $39=      16?3                 29:'id'             	;0
49  44   ECHO/40                   ?0        $39                  ?0                  	;0
50  45   ECHO/40                   ?0        30:'">'              ?0                  	;0
51  46   FETCH_DIM_R/81            $40=      16?3                 31:'category_name'  	;0
52  46   ECHO/40                   ?0        $40                  ?0                  	;0
53  47   ECHO/40                   ?0        32:'</option>
                                                    ' ?0                  	;0
54  48   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
55  48   FE_FREE/127               ?0        $34                  ?0                  	;0	<<32
56  51   ECHO/40                   ?0        33:'                                                </select>
                                            </td>
                                            ' ?0                  	;0
57  53   FETCH_DIM_R/81            $41=      16?4                 34:'bouquets'       	;0
58  53   BOOL_NOT/13               #42=      $41                  ?0                  	;0
59  53   JMPZ/43                   ?0        #42                  ?62                 	;0	>>62
60  54   NOP/0                     ?0        ?0                   ?0                  	;1
61  54   GOTO/253                  ?0        ?152                 ?35                 	;0
62  56   NOP/0                     ?0        ?0                   ?0                  	;1	<<59
63  56   GOTO/253                  ?0        ?159                 ?36                 	;0
64  58   ECHO/40                   ?0        37:'" data-id="'     ?0                  	;0
65  59   FETCH_DIM_R/81            $43=      16?1                 38:'id'             	;0
66  59   ECHO/40                   ?0        $43                  ?0                  	;0
67  60   ECHO/40                   ?0        39:'">
                                                    ' ?0                  	;0
68  61   FETCH_DIM_R/81            $44=      16?4                 40:'epg'            	;0
69  61   BOOL_NOT/13               #45=      $44                  ?0                  	;0
70  61   JMPZ/43                   ?0        #45                  ?73                 	;0	>>73
71  62   NOP/0                     ?0        ?0                   ?0                  	;1
72  62   GOTO/253                  ?0        ?79                  ?41                 	;0
73  64   ECHO/40                   ?0        42:'                                                    <div class="input-group-append">
                                                        <a href="javascript: void(0);" onClick="scanEPG(' ?0                  	;0	<<70
74  65   NOP/0                     ?0        ?0                   ?0                  	;1
75  65   GOTO/253                  ?0        ?76                  ?43                 	;0
76  67   FETCH_DIM_R/81            $46=      16?1                 44:'id'             	;0
77  67   ECHO/40                   ?0        $46                  ?0                  	;0
78  68   ECHO/40                   ?0        45:');" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify text-white"></i></a>
                                                    </div>
                                                    ' ?0                  	;0
79  70   ECHO/40                   ?0        46:'                                                </div>
                                            </td>
                                            ' ?0                  	;0
80  71   FETCH_DIM_R/81            $47=      16?4                 47:'categories'     	;0
81  71   BOOL_NOT/13               #48=      $47                  ?0                  	;0
82  71   JMPZ/43                   ?0        #48                  ?85                 	;0	>>85
83  72   NOP/0                     ?0        ?0                   ?0                  	;1
84  72   GOTO/253                  ?0        ?57                  ?48                 	;0
85  74   NOP/0                     ?0        ?0                   ?0                  	;1	<<82
86  74   GOTO/253                  ?0        ?87                  ?49                 	;0
87  76   ECHO/40                   ?0        50:'                                            <td>
                                                <select id="category_id_' ?0                  	;0
88  77   FETCH_DIM_R/81            $49=      16?1                 51:'id'             	;0
89  77   ECHO/40                   ?0        $49                  ?0                  	;0
90  78   ECHO/40                   ?0        52:'" class="form-control select2-multiple category_id" data-id="' ?0                  	;0
91  79   FETCH_DIM_R/81            $50=      16?1                 53:'id'             	;0
92  79   ECHO/40                   ?0        $50                  ?0                  	;0
93  80   ECHO/40                   ?0        54:'" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                    ' ?0                  	;0
94  81   NOP/0                     ?0        ?0                   ?0                  	;1
95  81   GOTO/253                  ?0        ?32                  ?55                 	;0
96  83   ECHO/40                   ?0        56:'" type="button" title="Clear EPG" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white fas fa-times"></i></button>
                                                <button onClick="viewEPG(this);" id="view_epg_' ?0                  	;0
97  84   FETCH_DIM_R/81            $51=      16?1                 57:'id'             	;0
98  84   ECHO/40                   ?0        $51                  ?0                  	;0
99  85   ECHO/40                   ?0        58:'" data-id="'     ?0                  	;0
100 86   FETCH_DIM_R/81            $52=      16?1                 59:'id'             	;0
101 86   ECHO/40                   ?0        $52                  ?0                  	;0
102 87   ECHO/40                   ?0        60:'" type="button" title="View EPG API" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white far fa-circle"></i></button>
                                            </td>
                                            ' ?0                  	;0
103 88   NOP/0                     ?0        ?0                   ?0                  	;1
104 88   GOTO/253                  ?0        ?19                  ?61                 	;0
105 90   ECHO/40                   ?0        62:'                                        <tr id="stream_' ?0                  	;0
106 91   FETCH_DIM_R/81            $53=      16?1                 63:'id'             	;0
107 91   ECHO/40                   ?0        $53                  ?0                  	;0
108 92   ECHO/40                   ?0        64:'" data-id="'     ?0                  	;0
109 93   FETCH_DIM_R/81            $54=      16?1                 65:'id'             	;0
110 93   ECHO/40                   ?0        $54                  ?0                  	;0
111 94   ECHO/40                   ?0        66:'">
                                            <td class="text-center">' ?0                  	;0
112 95   NOP/0                     ?0        ?0                   ?0                  	;1
113 95   GOTO/253                  ?0        ?114                 ?67                 	;0
114 97   FETCH_DIM_R/81            $55=      16?1                 68:'id'             	;0
115 97   ECHO/40                   ?0        $55                  ?0                  	;0
116 98   ECHO/40                   ?0        69:'</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control name_input" id="name_' ?0                  	;0
117 99   FETCH_DIM_R/81            $56=      16?1                 70:'id'             	;0
118 99   ECHO/40                   ?0        $56                  ?0                  	;0
119 100  ECHO/40                   ?0        71:'" value="'       ?0                  	;0
120 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'htmlspecialchars'	;1
121 101  FETCH_DIM_FUNC_ARG/93     $57=      16?1                 74:'title'          	;1
122 101  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
123 101  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
124 101  ECHO/40                   ?0        $58                  ?0                  	;0
125 102  NOP/0                     ?0        ?0                   ?0                  	;1
126 102  GOTO/253                  ?0        ?64                  ?75                 	;0
127 104  FE_RESET_R/77             $59=      16?5                 ?150                	;0
128 104  FE_FETCH_R/78             ?0        $59                  16?6                	;150	>>150	<<149
129 105  ECHO/40                   ?0        76:'                                                    <option ' ?0                  	;0
130 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'in_array'       	;2
131 106  FETCH_DIM_FUNC_ARG/93     $60=      16?6                 79:'id'             	;1
132 106  SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
133 106  FETCH_DIM_FUNC_ARG/93     $61=      16?1                 80:'bouquets'       	;2
134 106  SEND_VAR_EX/66            ?96       $61                  ?2                  	;0
135 106  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
136 106  BOOL_NOT/13               #63=      $62                  ?0                  	;0
137 106  JMPZ/43                   ?0        #63                  ?141                	;0	>>141
138 107  NOP/0                     ?0        ?0                   ?0                  	;1
139 107  NOP/0                     ?0        ?0                   ?0                  	;1
140 107  GOTO/253                  ?0        ?142                 ?81                 	;0
141 109  ECHO/40                   ?0        82:'selected '       ?0                  	;0	<<137
142 111  ECHO/40                   ?0        83:'value="'         ?0                  	;0
143 112  FETCH_DIM_R/81            $64=      16?6                 84:'id'             	;0
144 112  ECHO/40                   ?0        $64                  ?0                  	;0
145 113  ECHO/40                   ?0        85:'">'              ?0                  	;0
146 114  FETCH_DIM_R/81            $65=      16?6                 86:'bouquet_name'   	;0
147 114  ECHO/40                   ?0        $65                  ?0                  	;0
148 115  ECHO/40                   ?0        87:'</option>
                                                    ' ?0                  	;0
149 116  JMP/42                    ?0        ?128                 ?0                  	;0	>>128
150 116  FE_FREE/127               ?0        $59                  ?0                  	;0	<<127
151 119  ECHO/40                   ?0        88:'                                                </select>
                                            </td>
                                            ' ?0                  	;0
152 121  FETCH_DIM_R/81            $66=      16?4                 89:'epg'            	;0
153 121  BOOL_NOT/13               #67=      $66                  ?0                  	;0
154 121  JMPZ/43                   ?0        #67                  ?157                	;0	>>157
155 122  NOP/0                     ?0        ?0                   ?0                  	;1
156 122  GOTO/253                  ?0        ?19                  ?90                 	;0
157 124  NOP/0                     ?0        ?0                   ?0                  	;1	<<154
158 124  GOTO/253                  ?0        ?10                  ?91                 	;0
159 126  ECHO/40                   ?0        92:'                                            <td>
                                                <select id="bouquets_' ?0                  	;0
160 127  FETCH_DIM_R/81            $68=      16?1                 93:'id'             	;0
161 127  ECHO/40                   ?0        $68                  ?0                  	;0
162 128  ECHO/40                   ?0        94:'" data-id="'     ?0                  	;0
163 129  FETCH_DIM_R/81            $69=      16?1                 95:'id'             	;0
164 129  ECHO/40                   ?0        $69                  ?0                  	;0
165 130  ECHO/40                   ?0        96:'" class="form-control select2-multiple bouquet" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                    ' ?0                  	;0
166 131  NOP/0                     ?0        ?0                   ?0                  	;1
167 131  GOTO/253                  ?0        ?127                 ?97                 	;0
168 132  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
169 132  FE_FREE/127               ?0        $28                  ?0                  	;0	<<6
170 135  ECHO/40                   ?0        98:'                                    </tbody>
                                </table>
                            </div>
                        </div> 
                        ' ?0                  	;0
171 136  GOTO/253                  ?0        ?611                 ?99                 	;0
172 138  ECHO/40                   ?0        100:'                        <input type="hidden" name="streams" id="streams" value="" />
                        <div id="basicwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                        <i class="mdi mdi-play mr-1"></i>
                                        <span class="d-none d-sm-inline">Stream Selection</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content b-0 mb-0 pt-0">
                                <div class="tab-pane" id="stream-selection">
                                    <div class="row" style="margin-bottom: 40px;">
                                        <label class="col-md-2 col-form-label" for="edit_categories">Edit Categories</label>
                                        <div class="col-md-2">
                                            <input name="edit_categories" id="edit_categories" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                        </div>
                                        <label class="col-md-2 col-form-label" for="edit_bouquets">Edit Bouquets</label>
                                        <div class="col-md-2">
                                            <input name="edit_bouquets" id="edit_bouquets" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                        </div>
                                        <label class="col-md-2 col-form-label" for="edit_epg">Edit EPG</label>
                                        <div class="col-md-2">
                                            <input name="edit_epg" id="edit_epg" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-6">
                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="Search Streams...">
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <select id="category_search" class="form-control" data-toggle="select2">
                                                <option value="" selected>All Categories</option>
                                                ' ?0                  	;0
173 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'f769E3F0c739D1a6'	;1
174 139  SEND_VAL_EX/116           ?80       103:'live'           ?1                  	;0
175 139  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
176 139  FE_RESET_R/77             $71=      $70                  ?206                	;0
177 139  FE_FETCH_R/78             ?0        $71                  16?3                	;206	>>206	<<205
178 140  ECHO/40                   ?0        104:'                                                <option value="' ?0                  	;0
179 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'intval'        	;1
180 141  FETCH_DIM_FUNC_ARG/93     $72=      16?3                 107:'id'            	;1
181 141  SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
182 141  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
183 141  ECHO/40                   ?0        $73                  ?0                  	;0
184 142  ECHO/40                   ?0        108:'"'              ?0                  	;0
185 143  FETCH_STATIC_PROP_IS/176  $74=      109:'rRequest'       110:'XUI'           	;0
186 143  ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  112:'category'      	;33554432
187 143  JMPZ_EX/46                #75=      #75                  ?193                	;0	>>193
188 143  FETCH_STATIC_PROP_R/173   $76=      113:'rRequest'       114:'XUI'           	;0
189 143  FETCH_DIM_R/81            $77=      $76                  116:'category'      	;0
190 143  FETCH_DIM_R/81            $78=      16?3                 117:'id'            	;0
191 143  IS_EQUAL/17               #79=      $77                  $78                 	;0
192 143  BOOL/52                   #75=      #79                  ?0                  	;0
193 143  BOOL_NOT/13               #80=      #75                  ?0                  	;0	<<187
194 143  JMPZ/43                   ?0        #80                  ?197                	;0	>>197
195 144  NOP/0                     ?0        ?0                   ?0                  	;1
196 144  GOTO/253                  ?0        ?198                 ?118                	;0
197 146  ECHO/40                   ?0        119:' selected'      ?0                  	;0	<<194
198 148  ECHO/40                   ?0        120:'>'              ?0                  	;0
199 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'htmlspecialchars'	;1
200 149  FETCH_DIM_FUNC_ARG/93     $81=      16?3                 123:'category_name' 	;1
201 149  SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
202 149  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
203 149  ECHO/40                   ?0        $82                  ?0                  	;0
204 150  ECHO/40                   ?0        124:'</option>
                                                ' ?0                  	;0
205 151  JMP/42                    ?0        ?177                 ?0                  	;0	>>177
206 151  FE_FREE/127               ?0        $71                  ?0                  	;0	<<176
207 154  ECHO/40                   ?0        125:'                                            </select>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <select id="stream_filter" class="form-control" data-toggle="select2">
                                                <option value="">No Filter</option>
                                                <option value="1">Online</option>
                                                <option value="2">Down</option>
                                                <option value="3">Stopped</option>
                                                <option value="4">Starting</option>
                                                <option value="5">On Demand</option>
                                                <option value="6">Direct</option>
                                                <option value="7">Timeshift</option>
                                                <option value="8">Looping</option>
                                                <option value="9">Has EPG</option>
                                                <option value="10">No EPG</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-8">
                                            <select id="show_entries" class="form-control" data-toggle="select2">
                                                ' ?0                  	;0
208 155  FE_RESET_R/77             $83=      126:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?224                	;0
209 155  FE_FETCH_R/78             ?0        $83                  16?7                	;224	>>224	<<223
210 156  ECHO/40                   ?0        127:'                                                <option' ?0                  	;0
211 157  FETCH_DIM_R/81            $84=      16?8                 128:'default_entries'	;0
212 157  IS_EQUAL/17               #85=      $84                  16?7                	;0
213 157  BOOL_NOT/13               #86=      #85                  ?0                  	;0
214 157  JMPZ/43                   ?0        #86                  ?217                	;0	>>217
215 158  NOP/0                     ?0        ?0                   ?0                  	;1
216 158  GOTO/253                  ?0        ?218                 ?129                	;0
217 160  ECHO/40                   ?0        130:' selected'      ?0                  	;0	<<214
218 162  ECHO/40                   ?0        131:' value="'       ?0                  	;0
219 163  ECHO/40                   ?0        16?7                 ?0                  	;0
220 164  ECHO/40                   ?0        132:'">'             ?0                  	;0
221 165  ECHO/40                   ?0        16?7                 ?0                  	;0
222 166  ECHO/40                   ?0        133:'</option>
                                                ' ?0                  	;0
223 167  JMP/42                    ?0        ?209                 ?0                  	;0	>>209
224 167  FE_FREE/127               ?0        $83                  ?0                  	;0	<<208
225 169  GOTO/253                  ?0        ?1                   ?134                	;0
226 171  ECHO/40                   ?0        135:'">
                                    <thead>
                                        <tr>
                                            <th width="10%" class="text-center">ID</th>
                                            <th width="' ?0                  	;0
227 172  FETCH_DIM_R/81            $87=      16?9                 136:0               	;0
228 172  ECHO/40                   ?0        $87                  ?0                  	;0
229 173  ECHO/40                   ?0        137:'%">Stream Name</th>
                                            ' ?0                  	;0
230 174  FETCH_DIM_R/81            $88=      16?4                 138:'categories'    	;0
231 174  BOOL_NOT/13               #89=      $88                  ?0                  	;0
232 174  JMPZ/43                   ?0        #89                  ?234                	;0	>>234
233 175  GOTO/253                  ?0        ?262                 ?139                	;0
234 177  ECHO/40                   ?0        140:'                                            <th width="' ?0                  	;0	<<232
235 178  GOTO/253                  ?0        ?259                 ?141                	;0
236 180  INCLUDE_OR_EVAL/73        ?62       142:'session.php'    ?0                  	;2	<<0
237 181  INCLUDE_OR_EVAL/73        ?63       143:'functions.php'  ?0                  	;2
238 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'e6d500e19634d513'	;0
239 182  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
240 182  JMPZ/43                   ?0        $92                  ?242                	;0	>>242
241 183  GOTO/253                  ?0        ?244                 ?146                	;0
242 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'e72f42a93714bA87'	;0	<<240
243 185  DO_FCALL_BY_NAME/131      ?65       ?0                   ?0                  	;0
244 187  GOTO/253                  ?0        ?852                 ?149                	;0
245 189  FETCH_DIM_R/81            $94=      16?9                 150:2               	;0
246 189  ECHO/40                   ?0        $94                  ?0                  	;0
247 190  ECHO/40                   ?0        151:'%">Bouquets</th>
                                            ' ?0                  	;0
248 192  FETCH_DIM_R/81            $95=      16?4                 152:'epg'           	;0
249 192  BOOL_NOT/13               #96=      $95                  ?0                  	;0
250 192  JMPZ/43                   ?0        #96                  ?252                	;0	>>252
251 193  GOTO/253                  ?0        ?5                   ?153                	;0
252 195  ECHO/40                   ?0        154:'                                            <th>EPG Search</th>
                                            <th class="text-center">Language</th>
                                            <th></th>
                                            ' ?0                  	;0	<<250
253 196  GOTO/253                  ?0        ?5                   ?155                	;0
254 198  ECHO/40                   ?0        156:' style="display: none;"' ?0                  	;0
255 200  ECHO/40                   ?0        157:'>
    <div class="container-fluid">
        <form action="./stream_review" method="POST" id="stream_form" data-parsley-validate="">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
256 201  INCLUDE_OR_EVAL/73        ?69       158:'topbar.php'     ?0                  	;2
257 202  ECHO/40                   ?0        159:'					</div>
					<h4 class="page-title">Mass Edit & Review <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
258 203  GOTO/253                  ?0        ?667                 ?160                	;0
259 205  FETCH_DIM_R/81            $98=      16?9                 161:1               	;0
260 205  ECHO/40                   ?0        $98                  ?0                  	;0
261 206  ECHO/40                   ?0        162:'%">Categories</th>
                                            ' ?0                  	;0
262 208  FETCH_DIM_R/81            $99=      16?4                 163:'bouquets'      	;0
263 208  BOOL_NOT/13               #100=     $99                  ?0                  	;0
264 208  JMPZ/43                   ?0        #100                 ?266                	;0	>>266
265 209  GOTO/253                  ?0        ?248                 ?164                	;0
266 211  ECHO/40                   ?0        165:'                                            <th width="' ?0                  	;0	<<264
267 212  GOTO/253                  ?0        ?245                 ?166                	;0
268 214  FETCH_DIM_R/81            $101=     16?4                 167:'categories'    	;0
269 214  BOOL_NOT/13               #102=     $101                 ?0                  	;0
270 214  JMPZ_EX/46                #102=     #102                 ?274                	;0	>>274
271 214  FETCH_DIM_R/81            $103=     16?4                 168:'bouquets'      	;0
272 214  BOOL_NOT/13               #104=     $103                 ?0                  	;0
273 214  BOOL/52                   #102=     #104                 ?0                  	;0
274 214  JMPZ_EX/46                #102=     #102                 ?278                	;0	>>278	<<270
275 214  FETCH_DIM_R/81            $105=     16?4                 169:'epg'           	;0
276 214  BOOL_NOT/13               #106=     $105                 ?0                  	;0
277 214  BOOL/52                   #102=     #106                 ?0                  	;0
278 214  BOOL_NOT/13               #107=     #102                 ?0                  	;0	<<274
279 214  JMPZ/43                   ?0        #107                 ?281                	;0	>>281
280 215  GOTO/253                  ?0        ?282                 ?170                	;0
281 217  ASSIGN/38                 ?80       16?9                 171:array (
  0 => 90,
  1 => 0,
  2 => 0,
)	;0	<<279
282 219  ASSIGN/38                 ?81       16?0                 172:array (
)       	;0
283 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'count'         	;1
284 220  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
285 220  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
286 220  IS_SMALLER/19             #111=     175:0                $110                	;0
287 220  BOOL_NOT/13               #112=     #111                 ?0                  	;0
288 220  JMPZ/43                   ?0        #112                 ?290                	;0	>>290
289 221  GOTO/253                  ?0        ?659                 ?176                	;0
290 223  GOTO/253                  ?0        ?613                 ?177                	;0	<<288
291 225  ASSIGN/38                 ?85       16?11                178:array (
)       	;0
292 226  FE_RESET_R/77             $114=     16?5                 ?318                	;0
293 226  FE_FETCH_R/78             ?0        $114                 16?6                	;318	>>318	<<317
294 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'json_decode'   	;2
295 227  FETCH_DIM_FUNC_ARG/93     $115=     16?6                 181:'bouquet_channels'	;1
296 227  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
297 227  SEND_VAL_EX/116           ?96       182:true             ?2                  	;0
298 227  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
299 227  ASSIGN/38                 ?89       16?12                $116                	;0
300 228  FE_RESET_R/77             $118=     16?12                ?316                	;0
301 228  FE_FETCH_R/78             ?0        $118                 16?13               	;316	>>316	<<315
302 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'in_array'      	;2
303 229  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
304 229  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
305 229  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
306 229  BOOL_NOT/13               #120=     $119                 ?0                  	;0
307 229  JMPZ/43                   ?0        #120                 ?311                	;0	>>311
308 230  NOP/0                     ?0        ?0                   ?0                  	;1
309 230  NOP/0                     ?0        ?0                   ?0                  	;1
310 230  GOTO/253                  ?0        ?315                 ?185                	;0
311 232  FETCH_DIM_R/81            $123=     16?6                 186:'id'            	;0	<<307
312 232  FETCH_DIM_W/84            $121=     16?11                16?13               	;0
313 232  ASSIGN_DIM/147            ?94       $121                 ?4397406            	;0
314 232  OP_DATA/137               ?0        $123                 ?0                  	;0
315 234  JMP/42                    ?0        ?301                 ?0                  	;0	>>301
316 234  FE_FREE/127               ?0        $118                 ?0                  	;0	<<300
317 237  JMP/42                    ?0        ?293                 ?0                  	;0	>>293
318 237  FE_FREE/127               ?0        $114                 ?0                  	;0	<<292
319 240  FETCH_STATIC_PROP_IS/176  $124=     187:'rRequest'       188:'XUI'           	;0
320 240  ISSET_ISEMPTY_DIM_OBJ/115 #125=     $124                 190:'edit_categories'	;33554432
321 240  INIT_ARRAY/71             #126=     #125                 191:'categories'    	;14
322 240  FETCH_STATIC_PROP_IS/176  $127=     192:'rRequest'       193:'XUI'           	;0
323 240  ISSET_ISEMPTY_DIM_OBJ/115 #128=     $127                 195:'edit_epg'      	;33554432
324 240  ADD_ARRAY_ELEMENT/72      #126=     #128                 196:'epg'           	;0
325 240  FETCH_STATIC_PROP_IS/176  $129=     197:'rRequest'       198:'XUI'           	;0
326 240  ISSET_ISEMPTY_DIM_OBJ/115 #130=     $129                 200:'edit_bouquets' 	;33554432
327 240  ADD_ARRAY_ELEMENT/72      #126=     #130                 201:'bouquets'      	;0
328 240  ASSIGN/38                 ?103      16?4                 #126                	;0
329 241  ASSIGN/38                 ?104      16?9                 202:array (
  0 => 25,
  1 => 20,
  2 => 20,
)	;0
330 242  GOTO/253                  ?0        ?268                 ?203                	;0
331 245  ASSIGN/38                 ?105      16?14                204:array (
)       	;0
332 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'array_keys'    	;1
333 246  FETCH_STATIC_PROP_FUNC_ARG/177 $134=     207:'rRequest'       208:'XUI'           	;1
334 246  SEND_VAR_EX/66            ?80       $134                 ?1                  	;0
335 246  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
336 246  FE_RESET_R/77             $136=     $135                 ?388                	;0
337 246  FE_FETCH_R/78             ?0        $136                 16?15               	;388	>>388	<<387
338 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'explode'       	;2
339 247  SEND_VAL_EX/116           ?80       212:'_'              ?1                  	;0
340 247  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
341 247  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
342 247  ASSIGN/38                 ?110      16?16                $137                	;0
343 248  FETCH_DIM_R/81            $139=     16?16                213:0               	;0
344 248  IS_EQUAL/17               #140=     $139                 214:'modified'      	;0
345 248  JMPZ_EX/46                #140=     #140                 ?350                	;0	>>350
346 248  FETCH_STATIC_PROP_R/173   $141=     215:'rRequest'       216:'XUI'           	;0
347 248  FETCH_DIM_R/81            $142=     $141                 16?15               	;0
348 248  IS_EQUAL/17               #143=     $142                 218:1               	;0
349 248  BOOL/52                   #140=     #143                 ?0                  	;0
350 248  BOOL_NOT/13               #144=     #140                 ?0                  	;0	<<345
351 248  JMPZ/43                   ?0        #144                 ?354                	;0	>>354
352 249  NOP/0                     ?0        ?0                   ?0                  	;1
353 249  GOTO/253                  ?0        ?387                 ?219                	;0
354 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'intval'        	;1	<<351
355 251  FETCH_DIM_FUNC_ARG/93     $145=     16?16                222:1               	;1
356 251  SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
357 251  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
358 251  ASSIGN/38                 ?119      16?17                $146                	;0
359 252  ASSIGN_DIM/147            ?120      16?14                16?17               	;0
360 252  OP_DATA/137               ?0        223:array (
)        ?0                  	;0
361 253  FE_RESET_R/77             $149=     224:array (
  0 => 'name',
  1 => 'channel_id',
  2 => 'epg_id',
) ?371                	;0
362 253  FE_FETCH_R/78             ?0        $149                 16?18               	;371	>>371	<<370
363 254  CONCAT/8                  #153=     16?18                228:'_'             	;0
364 254  CONCAT/8                  #154=     #153                 16?17               	;0
365 254  FETCH_STATIC_PROP_R/173   $152=     225:'rRequest'       226:'XUI'           	;0
366 254  FETCH_DIM_R/81            $155=     $152                 #154                	;0
367 254  FETCH_DIM_W/84            $150=     16?14                16?17               	;0
368 254  ASSIGN_DIM/147            ?123      $150                 16?18               	;0
369 254  OP_DATA/137               ?0        $155                 ?0                  	;0
370 255  JMP/42                    ?0        ?362                 ?0                  	;0	>>362
371 255  FE_FREE/127               ?0        $149                 ?0                  	;0	<<361
372 258  FE_RESET_R/77             $156=     229:array (
  0 => 'bouquets',
  1 => 'categories',
) ?386                	;0
373 258  FE_FETCH_R/78             ?0        $156                 16?18               	;386	>>386	<<385
374 259  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'json_decode'   	;2
375 259  CONCAT/8                  #160=     16?18                235:'_'             	;0
376 259  CONCAT/8                  #161=     #160                 16?17               	;0
377 259  FETCH_STATIC_PROP_FUNC_ARG/177 $159=     232:'rRequest'       233:'XUI'           	;1
378 259  FETCH_DIM_FUNC_ARG/93     $162=     $159                 #161                	;1
379 259  SEND_VAR_EX/66            ?80       $162                 ?1                  	;0
380 259  SEND_VAL_EX/116           ?96       236:true             ?2                  	;0
381 259  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
382 259  FETCH_DIM_W/84            $157=     16?14                16?17               	;0
383 259  ASSIGN_DIM/147            ?130      $157                 16?18               	;0
384 259  OP_DATA/137               ?0        $163                 ?0                  	;0
385 260  JMP/42                    ?0        ?373                 ?0                  	;0	>>373
386 260  FE_FREE/127               ?0        $156                 ?0                  	;0	<<372
387 264  JMP/42                    ?0        ?337                 ?0                  	;0	>>337
388 264  FE_FREE/127               ?0        $136                 ?0                  	;0	<<336
389 267  FE_RESET_R/77             $164=     16?14                ?601                	;0
390 267  FE_FETCH_R/78             #165=     $164                 16?1                	;601	>>601	<<600
391 267  ASSIGN/38                 ?138      16?17                #165                	;0
392 268  NOP/0                     ?0        ?0                   ?0                  	;1
393 268  GOTO/253                  ?0        ?413                 ?237                	;0
394 270  FETCH_STATIC_PROP_R/173   $167=     238:'rRequest'       239:'XUI'           	;0
395 270  FETCH_DIM_R/81            $168=     $167                 241:'save_epg'      	;0
396 270  JMPZ_EX/46                #169=     $168                 ?400                	;0	>>400
397 270  ISSET_ISEMPTY_DIM_OBJ/115 #170=     16?1                 242:'channel_id'    	;16777216
398 270  BOOL_NOT/13               #171=     #170                 ?0                  	;0
399 270  BOOL/52                   #169=     #171                 ?0                  	;0
400 270  JMPZ_EX/46                #169=     #169                 ?404                	;0	>>404	<<396
401 270  FETCH_DIM_R/81            $172=     16?1                 243:'epg_id'        	;0
402 270  IS_EQUAL/17               #173=     $172                 244:0               	;0
403 270  BOOL/52                   #169=     #173                 ?0                  	;0
404 270  JMPZ/43                   ?0        #169                 ?407                	;0	>>407	<<400
405 271  NOP/0                     ?0        ?0                   ?0                  	;1
406 271  GOTO/253                  ?0        ?410                 ?245                	;0
407 273  ASSIGN/38                 ?146      16?19                246:0               	;0	<<404
408 274  NOP/0                     ?0        ?0                   ?0                  	;1
409 274  GOTO/253                  ?0        ?516                 ?247                	;0
410 276  ASSIGN/38                 ?147      16?19                248:1               	;0
411 277  NOP/0                     ?0        ?0                   ?0                  	;1
412 277  GOTO/253                  ?0        ?516                 ?249                	;0
413 279  FETCH_STATIC_PROP_R/173   $176=     250:'rRequest'       251:'XUI'           	;0
414 279  FETCH_DIM_R/81            $177=     $176                 253:'save_bouquets' 	;0
415 279  BOOL_NOT/13               #178=     $177                 ?0                  	;0
416 279  JMPZ/43                   ?0        #178                 ?419                	;0	>>419
417 280  NOP/0                     ?0        ?0                   ?0                  	;1
418 280  GOTO/253                  ?0        ?487                 ?254                	;0
419 282  ASSIGN/38                 ?151      16?20                255:array (
)       	;0	<<416
420 283  FETCH_STATIC_PROP_R/173   $180=     256:'rBouquets'      257:'XUI'           	;0
421 283  FE_RESET_R/77             $181=     $180                 ?444                	;0
422 283  FE_FETCH_R/78             #182=     $181                 16?6                	;444	>>444	<<443
423 283  ASSIGN/38                 ?155      16?21                #182                	;0
424 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'in_array'      	;2
425 284  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
426 284  FETCH_DIM_FUNC_ARG/93     $184=     16?6                 261:'streams'       	;2
427 284  SEND_VAR_EX/66            ?96       $184                 ?2                  	;0
428 284  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
429 284  JMPNZ_EX/47               #186=     $185                 ?436                	;0	>>436
430 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'in_array'      	;2
431 284  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
432 284  FETCH_DIM_FUNC_ARG/93     $187=     16?6                 264:'channels'      	;2
433 284  SEND_VAR_EX/66            ?96       $187                 ?2                  	;0
434 284  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
435 284  BOOL/52                   #186=     $188                 ?0                  	;0
436 284  BOOL_NOT/13               #189=     #186                 ?0                  	;0	<<429
437 284  JMPZ/43                   ?0        #189                 ?441                	;0	>>441
438 285  NOP/0                     ?0        ?0                   ?0                  	;1
439 285  NOP/0                     ?0        ?0                   ?0                  	;1
440 285  GOTO/253                  ?0        ?443                 ?265                	;0
441 287  ASSIGN_DIM/147            ?162      16?20                ?4397406            	;0	<<437
442 287  OP_DATA/137               ?0        16?21                ?0                  	;0
443 289  JMP/42                    ?0        ?422                 ?0                  	;0	>>422
444 289  FE_FREE/127               ?0        $181                 ?0                  	;0	<<421
445 292  ASSIGN/38                 $191=     16?23                266:array (
)       	;0
446 292  ASSIGN/38                 ?164      16?22                $191                	;0
447 293  NOP/0                     ?0        ?0                   ?0                  	;1
448 293  GOTO/253                  ?0        ?449                 ?267                	;0
449 295  FE_RESET_R/77             $193=     16?20                ?466                	;0
450 295  FE_FETCH_R/78             ?0        $193                 16?21               	;466	>>466	<<465
451 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'in_array'      	;2
452 296  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
453 296  FETCH_DIM_FUNC_ARG/93     $194=     16?1                 270:'bouquets'      	;2
454 296  SEND_VAR_EX/66            ?96       $194                 ?2                  	;0
455 296  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
456 296  JMPZ/43                   ?0        $195                 ?460                	;0	>>460
457 297  NOP/0                     ?0        ?0                   ?0                  	;1
458 297  NOP/0                     ?0        ?0                   ?0                  	;1
459 297  GOTO/253                  ?0        ?465                 ?271                	;0
460 299  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'f8e9aBB1f656E13f'	;3	<<456
461 299  SEND_VAL_EX/116           ?80       274:'stream'         ?1                  	;0
462 299  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
463 299  SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
464 299  DO_FCALL_BY_NAME/131      ?168      ?0                   ?0                  	;0
465 301  JMP/42                    ?0        ?450                 ?0                  	;0	>>450
466 301  FE_FREE/127               ?0        $193                 ?0                  	;0	<<449
467 304  FETCH_DIM_R/81            $197=     16?1                 275:'bouquets'      	;0
468 304  FE_RESET_R/77             $198=     $197                 ?486                	;0
469 304  FE_FETCH_R/78             ?0        $198                 16?21               	;486	>>486	<<485
470 305  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'in_array'      	;2
471 305  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
472 305  SEND_VAR_EX/66            ?96       16?20                ?2                  	;0
473 305  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
474 305  JMPZ/43                   ?0        $199                 ?478                	;0	>>478
475 306  NOP/0                     ?0        ?0                   ?0                  	;1
476 306  NOP/0                     ?0        ?0                   ?0                  	;1
477 306  GOTO/253                  ?0        ?485                 ?278                	;0
478 308  ASSIGN_DIM/147            ?172      16?23                ?4397406            	;0	<<474
479 308  OP_DATA/137               ?0        16?21                ?0                  	;0
480 309  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'b8b65e8cB6A1dfe9'	;3
481 309  SEND_VAL_EX/116           ?80       281:'stream'         ?1                  	;0
482 309  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
483 309  SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
484 309  DO_FCALL_BY_NAME/131      ?173      ?0                   ?0                  	;0
485 311  JMP/42                    ?0        ?469                 ?0                  	;0	>>469
486 311  FE_FREE/127               ?0        $198                 ?0                  	;0	<<468
487 315  NOP/0                     ?0        ?0                   ?0                  	;1
488 315  GOTO/253                  ?0        ?394                 ?282                	;0
489 317  NOP/0                     ?0        ?0                   ?0                  	;1
490 317  GOTO/253                  ?0        ?512                 ?283                	;0
491 319  INIT_METHOD_CALL/112      ?0        16?24                284:'query'         	;6
492 319  SEND_VAL_EX/116           ?80       286:'UPDATE `streams` SET `stream_display_name` = ?, `channel_id` = ?, `epg_id` = ?, `epg_api` = ? WHERE `id` = ?;' ?1                  	;0
493 319  FETCH_DIM_FUNC_ARG/93     $202=     16?1                 287:'name'          	;2
494 319  SEND_VAR_EX/66            ?96       $202                 ?2                  	;0
495 319  FETCH_DIM_R/81            $203=     16?1                 288:'channel_id'    	;0
496 319  JMP_SET/152               #204=     $203                 ?498                	;0
497 319  QM_ASSIGN/22              #204=     289:NULL             ?0                  	;0
498 319  SEND_VAL_EX/116           ?112      #204                 ?3                  	;0
499 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'is_null'       	;1
500 319  FETCH_DIM_FUNC_ARG/93     $205=     16?1                 292:'epg_id'        	;1
501 319  SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
502 319  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
503 319  JMPZ/43                   ?0        $206                 ?506                	;0	>>506
504 319  QM_ASSIGN/22              #207=     293:NULL             ?0                  	;0
505 319  JMP/42                    ?0        ?508                 ?0                  	;0	>>508
506 319  FETCH_DIM_R/81            $208=     16?1                 294:'epg_id'        	;0	<<503
507 319  QM_ASSIGN/22              #207=     $208                 ?0                  	;0
508 319  SEND_VAL_EX/116           ?128      #207                 ?4                  	;0	<<505
509 319  SEND_VAR_EX/66            ?144      16?19                ?5                  	;0
510 319  SEND_VAR_EX/66            ?160      16?17                ?6                  	;0
511 319  DO_FCALL/60               ?181      ?0                   ?0                  	;0
512 321  NOP/0                     ?0        ?0                   ?0                  	;1
513 321  GOTO/253                  ?0        ?596                 ?295                	;0
514 322  NOP/0                     ?0        ?0                   ?0                  	;1
515 322  GOTO/253                  ?0        ?578                 ?296                	;0
516 325  FETCH_STATIC_PROP_R/173   $210=     297:'rRequest'       298:'XUI'           	;0
517 325  FETCH_DIM_R/81            $211=     $210                 300:'save_categories'	;0
518 325  JMPZ_EX/46                #212=     $211                 ?522                	;0	>>522
519 325  FETCH_STATIC_PROP_R/173   $213=     301:'rRequest'       302:'XUI'           	;0
520 325  FETCH_DIM_R/81            $214=     $213                 304:'save_epg'      	;0
521 325  BOOL/52                   #212=     $214                 ?0                  	;0
522 325  JMPZ/43                   ?0        #212                 ?525                	;0	>>525	<<518
523 326  NOP/0                     ?0        ?0                   ?0                  	;1
524 326  GOTO/253                  ?0        ?598                 ?305                	;0
525 328  FETCH_STATIC_PROP_R/173   $215=     306:'rRequest'       307:'XUI'           	;0	<<522
526 328  FETCH_DIM_R/81            $216=     $215                 309:'save_categories'	;0
527 328  JMPZ/43                   ?0        $216                 ?530                	;0	>>530
528 329  NOP/0                     ?0        ?0                   ?0                  	;1
529 329  GOTO/253                  ?0        ?578                 ?310                	;0
530 331  FETCH_STATIC_PROP_R/173   $217=     311:'rRequest'       312:'XUI'           	;0	<<527
531 331  FETCH_DIM_R/81            $218=     $217                 314:'save_epg'      	;0
532 331  JMPZ/43                   ?0        $218                 ?535                	;0	>>535
533 332  NOP/0                     ?0        ?0                   ?0                  	;1
534 332  GOTO/253                  ?0        ?491                 ?315                	;0
535 334  INIT_METHOD_CALL/112      ?0        16?24                316:'query'         	;3	<<532
536 334  SEND_VAL_EX/116           ?80       318:'UPDATE `streams` SET `stream_display_name` = ? WHERE `id` = ?;' ?1                  	;0
537 334  FETCH_DIM_FUNC_ARG/93     $219=     16?1                 319:'name'          	;2
538 334  SEND_VAR_EX/66            ?96       $219                 ?2                  	;0
539 334  SEND_VAR_EX/66            ?112      16?17                ?3                  	;0
540 334  DO_FCALL/60               ?192      ?0                   ?0                  	;0
541 335  NOP/0                     ?0        ?0                   ?0                  	;1
542 335  GOTO/253                  ?0        ?489                 ?320                	;0
543 337  INIT_METHOD_CALL/112      ?0        16?24                321:'query'         	;7
544 337  SEND_VAL_EX/116           ?80       323:'UPDATE `streams` SET `stream_display_name` = ?, `category_id` = ?, `channel_id` = ?, `epg_id` = ?, `epg_api` = ? WHERE `id` = ?;' ?1                  	;0
545 337  FETCH_DIM_FUNC_ARG/93     $221=     16?1                 324:'name'          	;2
546 337  SEND_VAR_EX/66            ?96       $221                 ?2                  	;0
547 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'implode'       	;2
548 337  SEND_VAL_EX/116           ?80       327:','              ?1                  	;0
549 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'array_map'     	;2
550 337  SEND_VAL_EX/116           ?80       330:'intval'         ?1                  	;0
551 337  FETCH_DIM_FUNC_ARG/93     $222=     16?1                 331:'categories'    	;2
552 337  SEND_VAR_EX/66            ?96       $222                 ?2                  	;0
553 337  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
554 337  SEND_VAR_NO_REF_EX/50     ?96       $223                 ?2                  	;0
555 337  DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
556 337  CONCAT/8                  #225=     332:'['              $224                	;0
557 337  CONCAT/8                  #226=     #225                 333:']'             	;0
558 337  SEND_VAL_EX/116           ?112      #226                 ?3                  	;0
559 337  FETCH_DIM_R/81            $227=     16?1                 334:'channel_id'    	;0
560 337  JMP_SET/152               #228=     $227                 ?562                	;0
561 337  QM_ASSIGN/22              #228=     335:NULL             ?0                  	;0
562 337  SEND_VAL_EX/116           ?128      #228                 ?4                  	;0
563 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'is_null'       	;1
564 337  FETCH_DIM_FUNC_ARG/93     $229=     16?1                 338:'epg_id'        	;1
565 337  SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
566 337  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
567 337  JMPZ/43                   ?0        $230                 ?570                	;0	>>570
568 337  QM_ASSIGN/22              #231=     339:NULL             ?0                  	;0
569 337  JMP/42                    ?0        ?572                 ?0                  	;0	>>572
570 337  FETCH_DIM_R/81            $232=     16?1                 340:'epg_id'        	;0	<<567
571 337  QM_ASSIGN/22              #231=     $232                 ?0                  	;0
572 337  SEND_VAL_EX/116           ?144      #231                 ?5                  	;0	<<569
573 337  SEND_VAR_EX/66            ?160      16?19                ?6                  	;0
574 337  SEND_VAR_EX/66            ?176      16?17                ?7                  	;0
575 337  DO_FCALL/60               ?205      ?0                   ?0                  	;0
576 340  NOP/0                     ?0        ?0                   ?0                  	;1
577 340  GOTO/253                  ?0        ?600                 ?341                	;0
578 343  INIT_METHOD_CALL/112      ?0        16?24                342:'query'         	;4
579 343  SEND_VAL_EX/116           ?80       344:'UPDATE `streams` SET `stream_display_name` = ?, `category_id` = ? WHERE `id` = ?;' ?1                  	;0
580 343  FETCH_DIM_FUNC_ARG/93     $234=     16?1                 345:'name'          	;2
581 343  SEND_VAR_EX/66            ?96       $234                 ?2                  	;0
582 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'implode'       	;2
583 343  SEND_VAL_EX/116           ?80       348:','              ?1                  	;0
584 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'array_map'     	;2
585 343  SEND_VAL_EX/116           ?80       351:'intval'         ?1                  	;0
586 343  FETCH_DIM_FUNC_ARG/93     $235=     16?1                 352:'categories'    	;2
587 343  SEND_VAR_EX/66            ?96       $235                 ?2                  	;0
588 343  DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
589 343  SEND_VAR_NO_REF_EX/50     ?96       $236                 ?2                  	;0
590 343  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
591 343  CONCAT/8                  #238=     353:'['              $237                	;0
592 343  CONCAT/8                  #239=     #238                 354:']'             	;0
593 343  SEND_VAL_EX/116           ?112      #239                 ?3                  	;0
594 343  SEND_VAR_EX/66            ?128      16?17                ?4                  	;0
595 343  DO_FCALL/60               ?212      ?0                   ?0                  	;0
596 345  NOP/0                     ?0        ?0                   ?0                  	;1
597 345  GOTO/253                  ?0        ?576                 ?355                	;0
598 347  NOP/0                     ?0        ?0                   ?0                  	;1
599 347  GOTO/253                  ?0        ?543                 ?356                	;0
600 348  JMP/42                    ?0        ?390                 ?0                  	;0	>>390
601 348  FE_FREE/127               ?0        $164                 ?0                  	;0	<<389
602 350  GOTO/253                  ?0        ?603                 ?357                	;0
603 353  INIT_FCALL_BY_NAME/59     ?0        ?0                   358:'header'        	;1
604 353  FETCH_CONSTANT/99         #241=     ?0                   360:'STATUS_SUCCESS'	;16
605 353  CONCAT/8                  #242=     363:'Location: ./streams?status=' #241                	;0
606 353  SEND_VAL_EX/116           ?80       #242                 ?1                  	;0
607 353  DO_FCALL_BY_NAME/131      ?215      ?0                   ?0                  	;0
608 354  EXIT/79                   ?0        ?0                   ?0                  	;0
609 356  ASSIGN/38                 ?216      16?25                364:'Review'        	;0
610 357  GOTO/253                  ?0        ?811                 ?365                	;0
611 360  ECHO/40                   ?0        366:'                    </div> 
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
' ?0                  	;0
612 361  GOTO/253                  ?0        ?876                 ?367                	;0
613 363  INIT_METHOD_CALL/112      ?0        16?24                368:'query'         	;1
614 363  INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'implode'       	;2
615 363  SEND_VAL_EX/116           ?80       372:','              ?1                  	;0
616 363  INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'array_map'     	;2
617 363  SEND_VAL_EX/116           ?80       375:'intval'         ?1                  	;0
618 363  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
619 363  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
620 363  SEND_VAR_NO_REF_EX/50     ?96       $245                 ?2                  	;0
621 363  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
622 363  CONCAT/8                  #247=     376:'SELECT * FROM `streams` WHERE `id` IN (' $246                	;0
623 363  CONCAT/8                  #248=     #247                 377:');'            	;0
624 363  SEND_VAL_EX/116           ?80       #248                 ?1                  	;0
625 363  DO_FCALL/60               ?221      ?0                   ?0                  	;0
626 364  INIT_METHOD_CALL/112      ?0        16?24                378:'get_rows'      	;0
627 364  DO_FCALL/60               $250=     ?0                   ?0                  	;0
628 364  FE_RESET_R/77             $251=     $250                 ?658                	;0
629 364  FE_FETCH_R/78             ?0        $251                 16?26               	;658	>>658	<<657
630 365  FETCH_DIM_R/81            $253=     16?26                380:'id'            	;0
631 365  INIT_ARRAY/71             #254=     $253                 381:'id'            	;26
632 365  FETCH_DIM_R/81            $255=     16?26                382:'channel_id'    	;0
633 365  JMP_SET/152               #256=     $255                 ?635                	;0
634 365  QM_ASSIGN/22              #256=     383:''               ?0                  	;0
635 365  ADD_ARRAY_ELEMENT/72      #254=     #256                 384:'channel_id'    	;0
636 365  FETCH_DIM_R/81            $257=     16?26                385:'epg_id'        	;0
637 365  JMP_SET/152               #258=     $257                 ?639                	;0
638 365  QM_ASSIGN/22              #258=     386:''               ?0                  	;0
639 365  ADD_ARRAY_ELEMENT/72      #254=     #258                 387:'epg_id'        	;0
640 365  FETCH_DIM_R/81            $259=     16?26                388:'stream_display_name'	;0
641 365  JMP_SET/152               #260=     $259                 ?643                	;0
642 365  QM_ASSIGN/22              #260=     389:''               ?0                  	;0
643 365  ADD_ARRAY_ELEMENT/72      #254=     #260                 390:'title'         	;0
644 365  INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'json_decode'   	;2
645 365  FETCH_DIM_FUNC_ARG/93     $261=     16?26                393:'category_id'   	;1
646 365  SEND_VAR_EX/66            ?80       $261                 ?1                  	;0
647 365  SEND_VAL_EX/116           ?96       394:true             ?2                  	;0
648 365  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
649 365  ADD_ARRAY_ELEMENT/72      #254=     $262                 395:'category'      	;0
650 365  FETCH_DIM_R/81            $263=     16?26                396:'id'            	;0
651 365  FETCH_DIM_R/81            $264=     16?11                $263                	;0
652 365  JMP_SET/152               #265=     $264                 ?654                	;0
653 365  QM_ASSIGN/22              #265=     397:array (
)        ?0                  	;0
654 365  ADD_ARRAY_ELEMENT/72      #254=     #265                 398:'bouquets'      	;0
655 365  ASSIGN_DIM/147            ?224      16?0                 ?4414262            	;0
656 365  OP_DATA/137               ?0        #254                 ?0                  	;0
657 366  JMP/42                    ?0        ?629                 ?0                  	;0	>>629
658 366  FE_FREE/127               ?0        $251                 ?0                  	;0	<<628
659 370  INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'count'         	;1
660 370  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
661 370  DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
662 370  IS_EQUAL/17               #267=     $266                 401:0               	;0
663 370  BOOL_NOT/13               #268=     #267                 ?0                  	;0
664 370  JMPZ/43                   ?0        #268                 ?666                	;0	>>666
665 371  GOTO/253                  ?0        ?809                 ?402                	;0
666 373  GOTO/253                  ?0        ?806                 ?403                	;0	<<664
667 375  ISSET_ISEMPTY_CV/197      #269=     16?27                ?0                  	;33554432
668 375  JMPZ_EX/46                #269=     #269                 ?672                	;0	>>672
669 375  FETCH_CONSTANT/99         #270=     ?0                   404:'STATUS_NO_SOURCES'	;16
670 375  IS_EQUAL/17               #271=     16?27                #270                	;0
671 375  BOOL/52                   #269=     #271                 ?0                  	;0
672 375  BOOL_NOT/13               #272=     #269                 ?0                  	;0	<<668
673 375  JMPZ/43                   ?0        #272                 ?675                	;0	>>675
674 376  GOTO/253                  ?0        ?676                 ?407                	;0
675 378  ECHO/40                   ?0        408:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    No streams were selected for review.
                </div>
                ' ?0                  	;0	<<673
676 380  ECHO/40                   ?0        409:'				<div class="card">
					<div class="card-body">
                        ' ?0                  	;0
677 381  ISSET_ISEMPTY_CV/197      #273=     16?0                 ?0                  	;33554432
678 381  JMPZ/43                   ?0        #273                 ?680                	;0	>>680
679 382  GOTO/253                  ?0        ?3                   ?410                	;0
680 384  GOTO/253                  ?0        ?172                 ?411                	;0	<<678
681 386  ECHO/40                   ?0        412:'" />
                        ' ?0                  	;0
682 387  FE_RESET_R/77             $274=     16?0                 ?799                	;0
683 387  FE_FETCH_R/78             ?0        $274                 16?1                	;799	>>799	<<798
684 388  NOP/0                     ?0        ?0                   ?0                  	;1
685 388  GOTO/253                  ?0        ?686                 ?413                	;0
686 390  FETCH_DIM_R/81            $275=     16?1                 414:'id'            	;0
687 390  CONCAT/8                  #276=     415:'<input type="hidden" name="modified_' $275                	;0
688 390  CONCAT/8                  #277=     #276                 416:'" id="modified_'	;0
689 390  FETCH_DIM_R/81            $278=     16?1                 417:'id'            	;0
690 390  CONCAT/8                  #279=     #277                 $278                	;0
691 390  CONCAT/8                  #280=     #279                 418:'" value="0" />'	;0
692 390  ECHO/40                   ?0        #280                 ?0                  	;0
693 391  FETCH_DIM_R/81            $281=     16?1                 419:'id'            	;0
694 391  CONCAT/8                  #282=     420:'<input type="hidden" name="name_' $281                	;0
695 391  CONCAT/8                  #283=     #282                 421:'" id="name_s_' 	;0
696 391  FETCH_DIM_R/81            $284=     16?1                 422:'id'            	;0
697 391  CONCAT/8                  #285=     #283                 $284                	;0
698 391  CONCAT/8                  #286=     #285                 423:'" value="'     	;0
699 391  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'htmlentities'  	;1
700 391  FETCH_DIM_FUNC_ARG/93     $287=     16?1                 426:'title'         	;1
701 391  SEND_VAR_EX/66            ?80       $287                 ?1                  	;0
702 391  DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
703 391  CONCAT/8                  #289=     #286                 $288                	;0
704 391  CONCAT/8                  #290=     #289                 427:'" />'          	;0
705 391  ECHO/40                   ?0        #290                 ?0                  	;0
706 392  FETCH_DIM_R/81            $291=     16?4                 428:'bouquets'      	;0
707 392  BOOL_NOT/13               #292=     $291                 ?0                  	;0
708 392  JMPZ/43                   ?0        #292                 ?711                	;0	>>711
709 393  NOP/0                     ?0        ?0                   ?0                  	;1
710 393  GOTO/253                  ?0        ?730                 ?429                	;0
711 395  FETCH_DIM_R/81            $293=     16?1                 430:'id'            	;0	<<708
712 395  CONCAT/8                  #294=     431:'<input type="hidden" name="bouquets_' $293                	;0
713 395  CONCAT/8                  #295=     #294                 432:'" id="bouquets_s_'	;0
714 395  FETCH_DIM_R/81            $296=     16?1                 433:'id'            	;0
715 395  CONCAT/8                  #297=     #295                 $296                	;0
716 395  CONCAT/8                  #298=     #297                 434:'" value="'     	;0
717 395  INIT_FCALL_BY_NAME/59     ?0        ?0                   435:'htmlentities'  	;1
718 395  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'implode'       	;2
719 395  SEND_VAL_EX/116           ?80       439:','              ?1                  	;0
720 395  FETCH_DIM_FUNC_ARG/93     $299=     16?1                 440:'bouquets'      	;2
721 395  SEND_VAR_EX/66            ?96       $299                 ?2                  	;0
722 395  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
723 395  CONCAT/8                  #301=     441:'['              $300                	;0
724 395  CONCAT/8                  #302=     #301                 442:']'             	;0
725 395  SEND_VAL_EX/116           ?80       #302                 ?1                  	;0
726 395  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
727 395  CONCAT/8                  #304=     #298                 $303                	;0
728 395  CONCAT/8                  #305=     #304                 443:'" />'          	;0
729 395  ECHO/40                   ?0        #305                 ?0                  	;0
730 397  NOP/0                     ?0        ?0                   ?0                  	;1
731 397  GOTO/253                  ?0        ?732                 ?444                	;0
732 399  FETCH_DIM_R/81            $306=     16?4                 445:'categories'    	;0
733 399  BOOL_NOT/13               #307=     $306                 ?0                  	;0
734 399  JMPZ/43                   ?0        #307                 ?737                	;0	>>737
735 400  NOP/0                     ?0        ?0                   ?0                  	;1
736 400  GOTO/253                  ?0        ?756                 ?446                	;0
737 402  FETCH_DIM_R/81            $308=     16?1                 447:'id'            	;0	<<734
738 402  CONCAT/8                  #309=     448:'<input type="hidden" name="categories_' $308                	;0
739 402  CONCAT/8                  #310=     #309                 449:'" id="categories_s_'	;0
740 402  FETCH_DIM_R/81            $311=     16?1                 450:'id'            	;0
741 402  CONCAT/8                  #312=     #310                 $311                	;0
742 402  CONCAT/8                  #313=     #312                 451:'" value="'     	;0
743 402  INIT_FCALL_BY_NAME/59     ?0        ?0                   452:'htmlentities'  	;1
744 402  INIT_FCALL_BY_NAME/59     ?0        ?0                   454:'implode'       	;2
745 402  SEND_VAL_EX/116           ?80       456:','              ?1                  	;0
746 402  FETCH_DIM_FUNC_ARG/93     $314=     16?1                 457:'category'      	;2
747 402  SEND_VAR_EX/66            ?96       $314                 ?2                  	;0
748 402  DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
749 402  CONCAT/8                  #316=     458:'['              $315                	;0
750 402  CONCAT/8                  #317=     #316                 459:']'             	;0
751 402  SEND_VAL_EX/116           ?80       #317                 ?1                  	;0
752 402  DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
753 402  CONCAT/8                  #319=     #313                 $318                	;0
754 402  CONCAT/8                  #320=     #319                 460:'" />'          	;0
755 402  ECHO/40                   ?0        #320                 ?0                  	;0
756 404  FETCH_DIM_R/81            $321=     16?4                 461:'epg'           	;0
757 404  BOOL_NOT/13               #322=     $321                 ?0                  	;0
758 404  JMPZ/43                   ?0        #322                 ?761                	;0	>>761
759 405  NOP/0                     ?0        ?0                   ?0                  	;1
760 405  GOTO/253                  ?0        ?796                 ?462                	;0
761 407  FETCH_DIM_R/81            $323=     16?1                 463:'id'            	;0	<<758
762 407  CONCAT/8                  #324=     464:'<input type="hidden" name="channel_id_' $323                	;0
763 407  CONCAT/8                  #325=     #324                 465:'" id="channel_id_s_'	;0
764 407  FETCH_DIM_R/81            $326=     16?1                 466:'id'            	;0
765 407  CONCAT/8                  #327=     #325                 $326                	;0
766 407  CONCAT/8                  #328=     #327                 467:'" value="'     	;0
767 407  INIT_FCALL_BY_NAME/59     ?0        ?0                   468:'htmlentities'  	;1
768 407  FETCH_DIM_FUNC_ARG/93     $329=     16?1                 470:'channel_id'    	;1
769 407  SEND_VAR_EX/66            ?80       $329                 ?1                  	;0
770 407  DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
771 407  CONCAT/8                  #331=     #328                 $330                	;0
772 407  CONCAT/8                  #332=     #331                 471:'" />'          	;0
773 407  ECHO/40                   ?0        #332                 ?0                  	;0
774 408  NOP/0                     ?0        ?0                   ?0                  	;1
775 408  GOTO/253                  ?0        ?776                 ?472                	;0
776 410  FETCH_DIM_R/81            $333=     16?1                 473:'id'            	;0
777 410  CONCAT/8                  #334=     474:'<input type="hidden" name="epg_id_' $333                	;0
778 410  CONCAT/8                  #335=     #334                 475:'" id="epg_id_s_'	;0
779 410  FETCH_DIM_R/81            $336=     16?1                 476:'id'            	;0
780 410  CONCAT/8                  #337=     #335                 $336                	;0
781 410  CONCAT/8                  #338=     #337                 477:'" value="'     	;0
782 410  INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'htmlentities'  	;1
783 410  FETCH_DIM_FUNC_ARG/93     $339=     16?1                 480:'epg_id'        	;1
784 410  SEND_VAR_EX/66            ?80       $339                 ?1                  	;0
785 410  DO_FCALL_BY_NAME/131      $340=     ?0                   ?0                  	;0
786 410  CONCAT/8                  #341=     #338                 $340                	;0
787 410  CONCAT/8                  #342=     #341                 481:'" />'          	;0
788 410  ECHO/40                   ?0        #342                 ?0                  	;0
789 411  FETCH_DIM_R/81            $343=     16?1                 482:'id'            	;0
790 411  CONCAT/8                  #344=     483:'<input type="hidden" name="epg_type_' $343                	;0
791 411  CONCAT/8                  #345=     #344                 484:'" id="epg_type_s_'	;0
792 411  FETCH_DIM_R/81            $346=     16?1                 485:'id'            	;0
793 411  CONCAT/8                  #347=     #345                 $346                	;0
794 411  CONCAT/8                  #348=     #347                 486:'" value="0" />'	;0
795 411  ECHO/40                   ?0        #348                 ?0                  	;0
796 414  NOP/0                     ?0        ?0                   ?0                  	;1
797 414  GOTO/253                  ?0        ?798                 ?487                	;0
798 415  JMP/42                    ?0        ?683                 ?0                  	;0	>>683
799 415  FE_FREE/127               ?0        $274                 ?0                  	;0	<<682
800 418  ECHO/40                   ?0        488:'                        <div class="row">
                            <div class="col-12">
                                <table id="datatable" class="table table-striped table-borderless dt-responsive nowrap" data-count="' ?0                  	;0
801 419  INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'count'         	;1
802 419  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
803 419  DO_FCALL_BY_NAME/131      $349=     ?0                   ?0                  	;0
804 419  ECHO/40                   ?0        $349                 ?0                  	;0
805 420  GOTO/253                  ?0        ?226                 ?491                	;0
806 422  FETCH_CONSTANT/99         #350=     ?0                   492:'STATUS_NO_SOURCES'	;16
807 422  ASSIGN/38                 ?323      16?27                #350                	;0
808 423  ASSIGN/38                 ?324      16?0                 495:NULL            	;0
809 426  GOTO/253                  ?0        ?609                 ?496                	;0
810 427  GOTO/253                  ?0        ?331                 ?497                	;0
811 429  INCLUDE_OR_EVAL/73        ?325      498:'header.php'     ?0                  	;2
812 430  ECHO/40                   ?0        499:'<div class="wrapper' ?0                  	;0
813 431  JMPZ/43                   ?0        16?0                 ?816                	;0	>>816
814 431  QM_ASSIGN/22              #354=     500:''               ?0                  	;0
815 431  JMP/42                    ?0        ?817                 ?0                  	;0	>>817
816 431  QM_ASSIGN/22              #354=     501:' boxed-layout-ext' ?0                  	;0	<<813
817 431  ECHO/40                   ?0        #354                 ?0                  	;0	<<815
818 432  ECHO/40                   ?0        502:'"'              ?0                  	;0
819 433  FETCH_IS/89               $355=     503:'_SERVER'        ?0                  	;0
820 433  ISSET_ISEMPTY_DIM_OBJ/115 #356=     $355                 504:'HTTP_X_REQUESTED_WITH'	;16777216
821 433  BOOL_NOT/13               #357=     #356                 ?0                  	;0
822 433  JMPZ_EX/46                #357=     #357                 ?830                	;0	>>830
823 433  INIT_FCALL_BY_NAME/59     ?0        ?0                   505:'strtolower'    	;1
824 433  FETCH_FUNC_ARG/92         $358=     507:'_SERVER'        ?0                  	;1
825 433  FETCH_DIM_FUNC_ARG/93     $359=     $358                 508:'HTTP_X_REQUESTED_WITH'	;1
826 433  SEND_VAR_EX/66            ?80       $359                 ?1                  	;0
827 433  DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
828 433  IS_EQUAL/17               #361=     $360                 509:'xmlhttprequest'	;0
829 433  BOOL/52                   #357=     #361                 ?0                  	;0
830 433  BOOL_NOT/13               #362=     #357                 ?0                  	;0	<<822
831 433  JMPZ/43                   ?0        #362                 ?833                	;0	>>833
832 434  GOTO/253                  ?0        ?255                 ?510                	;0
833 436  GOTO/253                  ?0        ?254                 ?511                	;0	<<831
834 438  INIT_FCALL_BY_NAME/59     ?0        ?0                   512:'intval'        	;1
835 438  FETCH_DIM_FUNC_ARG/93     $363=     16?4                 514:'categories'    	;1
836 438  SEND_VAR_EX/66            ?80       $363                 ?1                  	;0
837 438  DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
838 438  ECHO/40                   ?0        $364                 ?0                  	;0
839 439  ECHO/40                   ?0        515:'" />
                        <input type="hidden" name="save_bouquets" value="' ?0                  	;0
840 440  INIT_FCALL_BY_NAME/59     ?0        ?0                   516:'intval'        	;1
841 440  FETCH_DIM_FUNC_ARG/93     $365=     16?4                 518:'bouquets'      	;1
842 440  SEND_VAR_EX/66            ?80       $365                 ?1                  	;0
843 440  DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
844 440  ECHO/40                   ?0        $366                 ?0                  	;0
845 441  ECHO/40                   ?0        519:'" />
                        <input type="hidden" name="save_epg" value="' ?0                  	;0
846 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   520:'intval'        	;1
847 442  FETCH_DIM_FUNC_ARG/93     $367=     16?4                 522:'epg'           	;1
848 442  SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
849 442  DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
850 442  ECHO/40                   ?0        $368                 ?0                  	;0
851 443  GOTO/253                  ?0        ?681                 ?523                	;0
852 445  FETCH_STATIC_PROP_IS/176  $369=     524:'rRequest'       525:'XUI'           	;0
853 445  ISSET_ISEMPTY_DIM_OBJ/115 #370=     $369                 527:'save_changes'  	;33554432
854 445  JMPZ/43                   ?0        #370                 ?856                	;0	>>856
855 446  GOTO/253                  ?0        ?331                 ?528                	;0
856 448  FETCH_STATIC_PROP_IS/176  $371=     529:'rRequest'       530:'XUI'           	;0	<<854
857 448  ISSET_ISEMPTY_DIM_OBJ/115 #372=     $371                 532:'streams'       	;33554432
858 448  BOOL_NOT/13               #373=     #372                 ?0                  	;0
859 448  JMPZ/43                   ?0        #373                 ?861                	;0	>>861
860 449  GOTO/253                  ?0        ?809                 ?533                	;0
861 451  INIT_FCALL_BY_NAME/59     ?0        ?0                   534:'json_decode'   	;2	<<859
862 451  FETCH_STATIC_PROP_FUNC_ARG/177 $374=     536:'rRequest'       537:'XUI'           	;1
863 451  FETCH_DIM_FUNC_ARG/93     $375=     $374                 539:'streams'       	;1
864 451  SEND_VAR_EX/66            ?80       $375                 ?1                  	;0
865 451  SEND_VAL_EX/116           ?96       540:true             ?2                  	;0
866 451  DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
867 451  ASSIGN/38                 ?349      16?10                $376                	;0
868 452  INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'F769e3f0c739D1a6'	;1
869 452  SEND_VAL_EX/116           ?80       543:'live'           ?1                  	;0
870 452  DO_FCALL_BY_NAME/131      $378=     ?0                   ?0                  	;0
871 452  ASSIGN/38                 ?351      16?2                 $378                	;0
872 453  INIT_FCALL_BY_NAME/59     ?0        ?0                   544:'F964b9222B35ADDD'	;0
873 453  DO_FCALL_BY_NAME/131      $380=     ?0                   ?0                  	;0
874 453  ASSIGN/38                 ?353      16?5                 $380                	;0
875 454  GOTO/253                  ?0        ?291                 ?546                	;0
876 456  INCLUDE_OR_EVAL/73        ?354      547:'footer.php'     ?0                  	;2
877 457  NOP/0                     ?0        548:1                ?0                  	;4294967295
*/

?>