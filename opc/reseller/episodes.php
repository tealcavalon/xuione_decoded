<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?112                 ?0                  	;0	>>112
1   5    ASSIGN/38                 ?0        16?0                 1:'Episodes'        	;0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'header.php'       ?0                  	;2
3   7    ECHO/40                   ?0        3:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
4   8    INCLUDE_OR_EVAL/73        ?2        4:'topbar.php'       ?0                  	;2
5   9    ECHO/40                   ?0        5:'					</div>
                    <h4 class="page-title">' ?0                  	;0
6   10   GOTO/253                  ?0        ?121                 ?6                  	;0
7   12   ECHO/40                   ?0        7:'>'                ?0                  	;0
8   13   FETCH_DIM_R/81            $11=      16?1                 8:'all_series'      	;0
9   13   ECHO/40                   ?0        $11                  ?0                  	;0
10  14   ECHO/40                   ?0        9:'</option>
                                    ' ?0                  	;0
11  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'DecBAb9141F9EE50'	;0
12  15   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
13  15   FE_RESET_R/77             $13=      $12                  ?55                 	;0
14  15   FE_FETCH_R/78             ?0        $13                  16?2                	;55	>>55	<<54
15  16   NOP/0                     ?0        ?0                   ?0                  	;1
16  16   GOTO/253                  ?0        ?17                  ?12                 	;0
17  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'in_array'       	;2
18  18   FETCH_DIM_FUNC_ARG/93     $14=      16?2                 15:'id'             	;1
19  18   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
20  18   FETCH_DIM_FUNC_ARG/93     $15=      16?3                 16:'series_ids'     	;2
21  18   SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
22  18   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
23  18   BOOL_NOT/13               #17=      $16                  ?0                  	;0
24  18   JMPZ/43                   ?0        #17                  ?27                 	;0	>>27
25  19   NOP/0                     ?0        ?0                   ?0                  	;1
26  19   GOTO/253                  ?0        ?45                  ?17                 	;0
27  21   ECHO/40                   ?0        18:'                                    <option value="' ?0                  	;0	<<24
28  22   FETCH_DIM_R/81            $18=      16?2                 19:'id'             	;0
29  22   ECHO/40                   ?0        $18                  ?0                  	;0
30  23   ECHO/40                   ?0        20:'"'               ?0                  	;0
31  24   FETCH_STATIC_PROP_IS/176  $19=      21:'rRequest'        22:'XUI'            	;0
32  24   ISSET_ISEMPTY_DIM_OBJ/115 #20=      $19                  24:'series'         	;33554432
33  24   JMPZ_EX/46                #20=      #20                  ?39                 	;0	>>39
34  24   FETCH_STATIC_PROP_R/173   $21=      25:'rRequest'        26:'XUI'            	;0
35  24   FETCH_DIM_R/81            $22=      $21                  28:'series'         	;0
36  24   FETCH_DIM_R/81            $23=      16?2                 29:'id'             	;0
37  24   IS_EQUAL/17               #24=      $22                  $23                 	;0
38  24   BOOL/52                   #20=      #24                  ?0                  	;0
39  24   BOOL_NOT/13               #25=      #20                  ?0                  	;0	<<33
40  24   JMPZ/43                   ?0        #25                  ?43                 	;0	>>43
41  25   NOP/0                     ?0        ?0                   ?0                  	;1
42  25   GOTO/253                  ?0        ?48                  ?30                 	;0
43  27   NOP/0                     ?0        ?0                   ?0                  	;1	<<40
44  27   GOTO/253                  ?0        ?47                  ?31                 	;0
45  31   NOP/0                     ?0        ?0                   ?0                  	;1
46  31   GOTO/253                  ?0        ?54                  ?32                 	;0
47  33   ECHO/40                   ?0        33:' selected'       ?0                  	;0
48  35   ECHO/40                   ?0        34:'>'               ?0                  	;0
49  36   FETCH_DIM_R/81            $26=      16?2                 35:'title'          	;0
50  36   ECHO/40                   ?0        $26                  ?0                  	;0
51  37   ECHO/40                   ?0        36:'</option>
                                    ' ?0                  	;0
52  38   NOP/0                     ?0        ?0                   ?0                  	;1
53  38   GOTO/253                  ?0        ?45                  ?37                 	;0
54  39   JMP/42                    ?0        ?14                  ?0                  	;0	>>14
55  39   FE_FREE/127               ?0        $13                  ?0                  	;0	<<13
56  42   GOTO/253                  ?0        ?57                  ?38                 	;0
57  44   ECHO/40                   ?0        39:'                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="series_category_id" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
58  45   FETCH_STATIC_PROP_IS/176  $27=      40:'rRequest'        41:'XUI'            	;0
59  45   ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  43:'category'       	;33554432
60  45   JMPZ/43                   ?0        #28                  ?62                 	;0	>>62
61  46   GOTO/253                  ?0        ?63                  ?44                 	;0
62  48   ECHO/40                   ?0        45:' selected'       ?0                  	;0	<<60
63  50   ECHO/40                   ?0        46:'>'               ?0                  	;0
64  51   GOTO/253                  ?0        ?138                 ?47                 	;0
65  53   FETCH_DIM_R/81            $29=      16?1                 48:'show'           	;0
66  53   ECHO/40                   ?0        $29                  ?0                  	;0
67  54   ECHO/40                   ?0        49:'</label>
                            <div class="col-md-2">
                                <select id="episodes_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
68  55   FE_RESET_R/77             $30=      50:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?109                	;0
69  55   FE_FETCH_R/78             ?0        $30                  16?4                	;109	>>109	<<108
70  56   NOP/0                     ?0        ?0                   ?0                  	;1
71  56   GOTO/253                  ?0        ?72                  ?51                 	;0
72  58   ECHO/40                   ?0        52:'                                    <option' ?0                  	;0
73  59   FETCH_STATIC_PROP_IS/176  $31=      53:'rRequest'        54:'XUI'            	;0
74  59   ISSET_ISEMPTY_DIM_OBJ/115 #32=      $31                  56:'entries'        	;33554432
75  59   JMPZ/43                   ?0        #32                  ?78                 	;0	>>78
76  60   NOP/0                     ?0        ?0                   ?0                  	;1
77  60   GOTO/253                  ?0        ?98                  ?57                 	;0
78  62   FETCH_DIM_R/81            $33=      16?5                 58:'default_entries'	;0	<<75
79  62   IS_EQUAL/17               #34=      $33                  16?4                	;0
80  62   BOOL_NOT/13               #35=      #34                  ?0                  	;0
81  62   JMPZ/43                   ?0        #35                  ?84                 	;0	>>84
82  63   NOP/0                     ?0        ?0                   ?0                  	;1
83  63   GOTO/253                  ?0        ?85                  ?59                 	;0
84  65   ECHO/40                   ?0        60:' selected'       ?0                  	;0	<<81
85  67   NOP/0                     ?0        ?0                   ?0                  	;1
86  67   GOTO/253                  ?0        ?96                  ?61                 	;0
87  69   ECHO/40                   ?0        62:'</option>
                                    ' ?0                  	;0
88  71   NOP/0                     ?0        ?0                   ?0                  	;1
89  71   GOTO/253                  ?0        ?108                 ?63                 	;0
90  74   ECHO/40                   ?0        64:' value="'        ?0                  	;0
91  75   ECHO/40                   ?0        16?4                 ?0                  	;0
92  76   ECHO/40                   ?0        65:'">'              ?0                  	;0
93  77   ECHO/40                   ?0        16?4                 ?0                  	;0
94  78   NOP/0                     ?0        ?0                   ?0                  	;1
95  78   GOTO/253                  ?0        ?87                  ?66                 	;0
96  80   NOP/0                     ?0        ?0                   ?0                  	;1
97  80   GOTO/253                  ?0        ?90                  ?67                 	;0
98  82   FETCH_STATIC_PROP_R/173   $36=      68:'rRequest'        69:'XUI'            	;0
99  82   FETCH_DIM_R/81            $37=      $36                  71:'entries'        	;0
100 82   IS_EQUAL/17               #38=      $37                  16?4                	;0
101 82   BOOL_NOT/13               #39=      #38                  ?0                  	;0
102 82   JMPZ/43                   ?0        #39                  ?105                	;0	>>105
103 83   NOP/0                     ?0        ?0                   ?0                  	;1
104 83   GOTO/253                  ?0        ?106                 ?72                 	;0
105 85   ECHO/40                   ?0        73:' selected'       ?0                  	;0	<<102
106 87   NOP/0                     ?0        ?0                   ?0                  	;1
107 87   GOTO/253                  ?0        ?90                  ?74                 	;0
108 88   JMP/42                    ?0        ?69                  ?0                  	;0	>>69
109 88   FE_FREE/127               ?0        $30                  ?0                  	;0	<<68
110 91   ECHO/40                   ?0        75:'                                </select>
                            </div>
                        </div>
                        <table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
									<th class="text-center">Image</th>
									<th>Name</th>
                                    <th>Category</th>
									<th class="text-center">Connections</th>
									<th class="text-center">Kill</th>
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
111 92   GOTO/253                  ?0        ?203                 ?76                 	;0
112 94   INCLUDE_OR_EVAL/73        ?32       77:'session.php'     ?0                  	;2	<<0
113 95   INCLUDE_OR_EVAL/73        ?33       78:'functions.php'   ?0                  	;2
114 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'BaF6e9ef7775b5A9'	;0
115 96   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
116 96   JMPZ/43                   ?0        $42                  ?118                	;0	>>118
117 97   GOTO/253                  ?0        ?120                 ?81                 	;0
118 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'e72f42a93714bA87'	;0	<<116
119 99   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
120 101  GOTO/253                  ?0        ?1                   ?84                 	;0
121 103  FETCH_DIM_R/81            $44=      16?1                 85:'episodes'       	;0
122 103  ECHO/40                   ?0        $44                  ?0                  	;0
123 104  ECHO/40                   ?0        86:'</h4>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
124 105  BOOL_NOT/13               #45=      16?6                 ?0                  	;0
125 105  JMPZ/43                   ?0        #45                  ?127                	;0	>>127
126 106  GOTO/253                  ?0        ?128                 ?87                 	;0
127 108  ECHO/40                   ?0        88:'collapse'        ?0                  	;0	<<125
128 110  GOTO/253                  ?0        ?189                 ?89                 	;0
129 112  FETCH_DIM_R/81            $46=      16?1                 90:'search_episodes'	;0
130 112  ECHO/40                   ?0        $46                  ?0                  	;0
131 113  ECHO/40                   ?0        91:'...">
                            </div>
                            <div class="col-md-3">
                                <select id="episodes_series" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
132 114  FETCH_STATIC_PROP_IS/176  $47=      92:'rRequest'        93:'XUI'            	;0
133 114  ISSET_ISEMPTY_DIM_OBJ/115 #48=      $47                  95:'series'         	;33554432
134 114  JMPZ/43                   ?0        #48                  ?136                	;0	>>136
135 115  GOTO/253                  ?0        ?137                 ?96                 	;0
136 117  ECHO/40                   ?0        97:' selected'       ?0                  	;0	<<134
137 119  GOTO/253                  ?0        ?7                   ?98                 	;0
138 121  FETCH_DIM_R/81            $49=      16?1                 99:'all_categories' 	;0
139 121  ECHO/40                   ?0        $49                  ?0                  	;0
140 122  ECHO/40                   ?0        100:'</option>
                                    ' ?0                  	;0
141 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'F769e3F0c739d1a6'	;1
142 123  SEND_VAL_EX/116           ?80       103:'series'         ?1                  	;0
143 123  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
144 123  FE_RESET_R/77             $51=      $50                  ?186                	;0
145 123  FE_FETCH_R/78             ?0        $51                  16?7                	;186	>>186	<<185
146 124  NOP/0                     ?0        ?0                   ?0                  	;1
147 124  GOTO/253                  ?0        ?157                 ?104                	;0
148 128  NOP/0                     ?0        ?0                   ?0                  	;1
149 128  GOTO/253                  ?0        ?185                 ?105                	;0
150 130  ECHO/40                   ?0        106:' selected'      ?0                  	;0
151 132  ECHO/40                   ?0        107:'>'              ?0                  	;0
152 133  FETCH_DIM_R/81            $52=      16?7                 108:'category_name' 	;0
153 133  ECHO/40                   ?0        $52                  ?0                  	;0
154 134  ECHO/40                   ?0        109:'</option>
                                    ' ?0                  	;0
155 135  NOP/0                     ?0        ?0                   ?0                  	;1
156 135  GOTO/253                  ?0        ?148                 ?110                	;0
157 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'in_array'      	;2
158 137  FETCH_DIM_FUNC_ARG/93     $53=      16?7                 113:'id'            	;1
159 137  SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
160 137  FETCH_DIM_FUNC_ARG/93     $54=      16?3                 114:'category_ids'  	;2
161 137  SEND_VAR_EX/66            ?96       $54                  ?2                  	;0
162 137  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
163 137  BOOL_NOT/13               #56=      $55                  ?0                  	;0
164 137  JMPZ/43                   ?0        #56                  ?167                	;0	>>167
165 138  NOP/0                     ?0        ?0                   ?0                  	;1
166 138  GOTO/253                  ?0        ?148                 ?115                	;0
167 140  ECHO/40                   ?0        116:'                                    <option value="' ?0                  	;0	<<164
168 141  FETCH_DIM_R/81            $57=      16?7                 117:'id'            	;0
169 141  ECHO/40                   ?0        $57                  ?0                  	;0
170 142  ECHO/40                   ?0        118:'"'              ?0                  	;0
171 143  FETCH_STATIC_PROP_IS/176  $58=      119:'rRequest'       120:'XUI'           	;0
172 143  ISSET_ISEMPTY_DIM_OBJ/115 #59=      $58                  122:'category'      	;33554432
173 143  JMPZ_EX/46                #59=      #59                  ?179                	;0	>>179
174 143  FETCH_STATIC_PROP_R/173   $60=      123:'rRequest'       124:'XUI'           	;0
175 143  FETCH_DIM_R/81            $61=      $60                  126:'category'      	;0
176 143  FETCH_DIM_R/81            $62=      16?7                 127:'id'            	;0
177 143  IS_EQUAL/17               #63=      $61                  $62                 	;0
178 143  BOOL/52                   #59=      #63                  ?0                  	;0
179 143  BOOL_NOT/13               #64=      #59                  ?0                  	;0	<<173
180 143  JMPZ/43                   ?0        #64                  ?183                	;0	>>183
181 144  NOP/0                     ?0        ?0                   ?0                  	;1
182 144  GOTO/253                  ?0        ?151                 ?128                	;0
183 146  NOP/0                     ?0        ?0                   ?0                  	;1	<<180
184 146  GOTO/253                  ?0        ?150                 ?129                	;0
185 147  JMP/42                    ?0        ?145                 ?0                  	;0	>>145
186 147  FE_FREE/127               ?0        $51                  ?0                  	;0	<<144
187 150  ECHO/40                   ?0        130:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="episodes_show_entries">' ?0                  	;0
188 151  GOTO/253                  ?0        ?65                  ?131                	;0
189 153  ECHO/40                   ?0        132:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="episodes_search" value="' ?0                  	;0
190 154  FETCH_STATIC_PROP_IS/176  $65=      133:'rRequest'       134:'XUI'           	;0
191 154  ISSET_ISEMPTY_DIM_OBJ/115 #66=      $65                  136:'search'        	;33554432
192 154  BOOL_NOT/13               #67=      #66                  ?0                  	;0
193 154  JMPZ/43                   ?0        #67                  ?195                	;0	>>195
194 155  GOTO/253                  ?0        ?201                 ?137                	;0
195 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'htmlspecialchars'	;1	<<193
196 157  FETCH_STATIC_PROP_FUNC_ARG/177 $68=      140:'rRequest'       141:'XUI'           	;1
197 157  FETCH_DIM_FUNC_ARG/93     $69=      $68                  143:'search'        	;1
198 157  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
199 157  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
200 157  ECHO/40                   ?0        $70                  ?0                  	;0
201 159  ECHO/40                   ?0        144:'" placeholder="' ?0                  	;0
202 160  GOTO/253                  ?0        ?129                 ?145                	;0
203 162  INCLUDE_OR_EVAL/73        ?63       146:'footer.php'     ?0                  	;2
204 163  NOP/0                     ?0        147:1                ?0                  	;4294967295
*/

?>