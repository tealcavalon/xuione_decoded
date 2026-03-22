<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?442                 ?0                  	;0	>>442
1   5    FETCH_DIM_R/81            $17=      16?0                 1:'theme'           	;0
2   5    IS_EQUAL/17               #18=      $17                  2:1                 	;0
3   5    JMPZ/43                   ?0        #18                  ?5                  	;0	>>5
4   6    GOTO/253                  ?0        ?7                   ?3                  	;0
5   8    ECHO/40                   ?0        4:'text-purple'      ?0                  	;0	<<3
6   9    GOTO/253                  ?0        ?657                 ?5                  	;0
7   11   ECHO/40                   ?0        6:'text-white'       ?0                  	;0
8   12   GOTO/253                  ?0        ?657                 ?7                  	;0
9   14   ECHO/40                   ?0        8:'bg-success'       ?0                  	;0
10  16   ECHO/40                   ?0        9:' text-white">
                        <div class="card-body online-users">
                            <div class="media align-items-center">
                                <div class="col-3">
                                    <div class="avatar-sm bg-light">
                                        <i class="fe-users avatar-title font-22 ' ?0                  	;0
11  17   FETCH_DIM_R/81            $19=      16?0                 10:'theme'          	;0
12  17   IS_EQUAL/17               #20=      $19                  11:1                	;0
13  17   JMPZ/43                   ?0        #20                  ?15                 	;0	>>15
14  18   GOTO/253                  ?0        ?456                 ?12                 	;0
15  20   ECHO/40                   ?0        13:'text-success'    ?0                  	;0	<<13
16  21   GOTO/253                  ?0        ?455                 ?14                 	;0
17  24   ECHO/40                   ?0        15:'text-white'      ?0                  	;0
18  26   ECHO/40                   ?0        16:'"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                        <p class="text-white mb-1 text-truncate">' ?0                  	;0
19  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'count'          	;1
20  27   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
21  27   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
22  27   IS_SMALLER/19             #22=      19:1                 $21                 	;0
23  27   JMPZ/43                   ?0        #22                  ?25                 	;0	>>25
24  28   GOTO/253                  ?0        ?408                 ?20                 	;0
25  30   GOTO/253                  ?0        ?406                 ?21                 	;0	<<23
26  32   ECHO/40                   ?0        22:'"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                        <p class="text-white mb-1 text-truncate">Active Lines</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="' ?0                  	;0
27  33   FETCH_DIM_R/81            $23=      16?2                 23:'create_sub_resellers'	;0
28  33   JMPZ/43                   ?0        $23                  ?31                 	;0	>>31
29  33   QM_ASSIGN/22              #24=      24:'users'           ?0                  	;0
30  33   JMP/42                    ?0        ?32                  ?0                  	;0	>>32
31  33   QM_ASSIGN/22              #24=      25:'javascript: void(0);' ?0                  	;0	<<28
32  33   ECHO/40                   ?0        #24                  ?0                  	;0	<<30
33  34   ECHO/40                   ?0        26:'">
                    <div class="card cta-box ' ?0                  	;0
34  35   FETCH_DIM_R/81            $25=      16?0                 27:'theme'          	;0
35  35   IS_EQUAL/17               #26=      $25                  28:0                	;0
36  35   BOOL_NOT/13               #27=      #26                  ?0                  	;0
37  35   JMPZ/43                   ?0        #27                  ?39                 	;0	>>39
38  36   GOTO/253                  ?0        ?41                  ?29                 	;0
39  38   ECHO/40                   ?0        30:'bg-info'         ?0                  	;0	<<37
40  39   GOTO/253                  ?0        ?41                  ?31                 	;0
41  42   ECHO/40                   ?0        32:' text-white">
                        <div class="card-body credits">
                            <div class="media align-items-center">
                                <div class="col-3">
                                    <div class="avatar-sm bg-light">
                                        <i class="fe-dollar-sign avatar-title font-22 ' ?0                  	;0
42  43   FETCH_DIM_R/81            $28=      16?0                 33:'theme'          	;0
43  43   IS_EQUAL/17               #29=      $28                  34:1                	;0
44  43   JMPZ/43                   ?0        #29                  ?46                 	;0	>>46
45  44   GOTO/253                  ?0        ?17                  ?35                 	;0
46  46   ECHO/40                   ?0        36:'text-info'       ?0                  	;0	<<44
47  47   GOTO/253                  ?0        ?18                  ?37                 	;0
48  48   GOTO/253                  ?0        ?17                  ?38                 	;0
49  50   ECHO/40                   ?0        39:'<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Welcome ' ?0                  	;0
50  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'htmlspecialchars'	;1
51  51   FETCH_DIM_FUNC_ARG/93     $30=      16?0                 42:'username'       	;1
52  51   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
53  51   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
54  51   ECHO/40                   ?0        $31                  ?0                  	;0
55  52   ECHO/40                   ?0        43:'</h4>
                </div>
                ' ?0                  	;0
56  53   ISSET_ISEMPTY_CV/197      #32=      16?3                 ?0                  	;16777216
57  53   JMPZ/43                   ?0        #32                  ?59                 	;0	>>59
58  54   GOTO/253                  ?0        ?649                 ?44                 	;0
59  56   ECHO/40                   ?0        45:'                <div class="card" style="padding: 1em 1em 0 1em;">
                    ' ?0                  	;0	<<57
60  57   GOTO/253                  ?0        ?647                 ?46                 	;0
61  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'preg_replace'   	;3
62  59   SEND_VAL_EX/116           ?80       49:'#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*-moz-binding[\\x00-\\x20]*:#u' ?1                  	;0
63  59   SEND_VAL_EX/116           ?96       50:'$1=$2nomozbinding...' ?2                  	;0
64  59   SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
65  59   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
66  59   ASSIGN/38                 ?17       16?3                 $33                 	;0
67  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'preg_replace'   	;3
68  60   SEND_VAL_EX/116           ?80       53:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?expression[\\x00-\\x20]*\\([^>]*+>#i' ?1                  	;0
69  60   SEND_VAL_EX/116           ?96       54:'$1>'             ?2                  	;0
70  60   SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
71  60   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
72  60   ASSIGN/38                 ?19       16?3                 $35                 	;0
73  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'preg_replace'   	;3
74  61   SEND_VAL_EX/116           ?80       57:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?behaviour[\\x00-\\x20]*\\([^>]*+>#i' ?1                  	;0
75  61   SEND_VAL_EX/116           ?96       58:'$1>'             ?2                  	;0
76  61   SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
77  61   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
78  61   ASSIGN/38                 ?21       16?3                 $37                 	;0
79  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'preg_replace'   	;3
80  62   SEND_VAL_EX/116           ?80       61:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:*[^>]*+>#iu' ?1                  	;0
81  62   SEND_VAL_EX/116           ?96       62:'$1>'             ?2                  	;0
82  62   SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
83  62   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
84  62   ASSIGN/38                 ?23       16?3                 $39                 	;0
85  63   INCLUDE_OR_EVAL/73        ?24       63:'header.php'      ?0                  	;2
86  64   GOTO/253                  ?0        ?49                  ?64                 	;0
87  66   ECHO/40                   ?0        65:'">
                    <div class="card cta-box ' ?0                  	;0
88  67   FETCH_DIM_R/81            $42=      16?0                 66:'theme'          	;0
89  67   IS_EQUAL/17               #43=      $42                  67:0                	;0
90  67   BOOL_NOT/13               #44=      #43                  ?0                  	;0
91  67   JMPZ/43                   ?0        #44                  ?93                 	;0	>>93
92  68   GOTO/253                  ?0        ?94                  ?68                 	;0
93  70   ECHO/40                   ?0        69:'bg-purple'       ?0                  	;0	<<91
94  72   ECHO/40                   ?0        70:' text-white">
                        <div class="card-body active-connections">
                            <div class="media align-items-center">
                                <div class="col-3">
                                    <div class="avatar-sm bg-light">
                                        <i class="fe-zap avatar-title font-22 ' ?0                  	;0
95  73   GOTO/253                  ?0        ?1                   ?71                 	;0
96  75   ECHO/40                   ?0        72:'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <a href="user_logs"><h4 class="header-title mb-4">Recent Activity</h4></a>
                        <div style="height: 350px; overflow-y: auto;">
                            <table class="table table-striped table-borderless m-0 table-centered dt-responsive nowrap w-100" id="users-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Reseller</th>
                                        <th class="text-center">Line / User</th>
                                        <th>Action</th>
                                        <th class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ' ?0                  	;0
97  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'D8c8284136938Ef0'	;0
98  76   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
99  76   ASSIGN/38                 ?29       16?4                 $45                 	;0
100 77   INIT_METHOD_CALL/112      ?0        16?5                 75:'query'          	;1
101 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'implode'        	;2
102 77   SEND_VAL_EX/116           ?80       79:','               ?1                  	;0
103 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'array_map'      	;2
104 77   SEND_VAL_EX/116           ?80       82:'intval'          ?1                  	;0
105 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'array_merge'    	;2
106 77   FETCH_DIM_R/81            $47=      16?0                 85:'id'             	;0
107 77   INIT_ARRAY/71             #48=      $47                  ?0                  	;4
108 77   SEND_VAL_EX/116           ?80       #48                  ?1                  	;0
109 77   FETCH_DIM_FUNC_ARG/93     $49=      16?2                 86:'all_reports'    	;2
110 77   SEND_VAR_EX/66            ?96       $49                  ?2                  	;0
111 77   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
112 77   SEND_VAR_NO_REF_EX/50     ?96       $50                  ?2                  	;0
113 77   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
114 77   SEND_VAR_NO_REF_EX/50     ?96       $51                  ?2                  	;0
115 77   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
116 77   CONCAT/8                  #53=      87:'SELECT * FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` WHERE `users_logs`.`owner` IN (' $52                 	;0
117 77   CONCAT/8                  #54=      #53                  88:') ORDER BY `date` DESC LIMIT 250;'	;0
118 77   SEND_VAL_EX/116           ?80       #54                  ?1                  	;0
119 77   DO_FCALL/60               ?38       ?0                   ?0                  	;0
120 78   INIT_METHOD_CALL/112      ?0        16?5                 89:'get_rows'       	;0
121 78   DO_FCALL/60               $56=      ?0                   ?0                  	;0
122 78   FE_RESET_R/77             $57=      $56                  ?404                	;0
123 78   FE_FETCH_R/78             ?0        $57                  16?6                	;404	>>404	<<403
124 79   NOP/0                     ?0        ?0                   ?0                  	;1
125 79   GOTO/253                  ?0        ?126                 ?91                 	;0
126 81   FETCH_DIM_R/81            $58=      16?6                 92:'owner'          	;0
127 81   CONCAT/8                  #59=      93:'<a class=\'text-dark\' href=\'user?id=' $58                 	;0
128 81   CONCAT/8                  #60=      #59                  94:'\'>'            	;0
129 81   FETCH_DIM_R/81            $61=      16?6                 95:'username'       	;0
130 81   CONCAT/8                  #62=      #60                  $61                 	;0
131 81   CONCAT/8                  #63=      #62                  96:'</a>'           	;0
132 81   ASSIGN/38                 ?47       16?7                 #63                 	;0
133 82   FETCH_DIM_R/81            $65=      16?6                 97:'type'           	;0
134 82   FETCH_DIM_R/81            $66=      98:array (
  'line' => 'User Line',
  'mag' => 'MAG Device',
  'enigma' => 'Enigma2 Device',
  'user' => 'Reseller',
) $65                 	;0
135 82   ASSIGN/38                 ?50       16?8                 $66                 	;0
136 83   ASSIGN/38                 ?51       16?9                 99:''               	;0
137 84   FETCH_DIM_R/81            $69=      16?6                 100:'action'        	;0
138 84   SWITCH_STRING/188         ?0        $69                  101:array (
  'new' => 158,
  'extend' => 180,
  'convert' => 202,
  'edit' => 206,
  'enable' => 212,
  'disable' => 218,
  'delete' => 224,
  'send_event' => 230,
  'adjust_credits' => 236,
)	;243
139 85   CASE/48                   #70=      $69                  102:'new'           	;0	>>141
140 85   JMPNZ/44                  ?0        #70                  ?158                	;0	>>158
141 95   CASE/48                   #70=      $69                  103:'extend'        	;0	>>143	<<139
142 95   JMPNZ/44                  ?0        #70                  ?180                	;0	>>180
143 105  CASE/48                   #70=      $69                  104:'convert'       	;0	>>145	<<141
144 105  JMPNZ/44                  ?0        #70                  ?202                	;0	>>202
145 108  CASE/48                   #70=      $69                  105:'edit'          	;0	>>147	<<143
146 108  JMPNZ/44                  ?0        #70                  ?206                	;0	>>206
147 111  CASE/48                   #70=      $69                  106:'enable'        	;0	>>149	<<145
148 111  JMPNZ/44                  ?0        #70                  ?212                	;0	>>212
149 114  CASE/48                   #70=      $69                  107:'disable'       	;0	>>151	<<147
150 114  JMPNZ/44                  ?0        #70                  ?218                	;0	>>218
151 117  CASE/48                   #70=      $69                  108:'delete'        	;0	>>153	<<149
152 117  JMPNZ/44                  ?0        #70                  ?224                	;0	>>224
153 120  CASE/48                   #70=      $69                  109:'send_event'    	;0	>>155	<<151
154 120  JMPNZ/44                  ?0        #70                  ?230                	;0	>>230
155 123  CASE/48                   #70=      $69                  110:'adjust_credits'	;0	>>157	<<153
156 123  JMPNZ/44                  ?0        #70                  ?236                	;0	>>236
157 123  JMP/42                    ?0        ?243                 ?0                  	;0	>>243	<<155
158 86   FETCH_DIM_R/81            $71=      16?6                 111:'package_id'    	;0	<<140
159 86   JMPZ/43                   ?0        $71                  ?163                	;0	>>163
160 87   NOP/0                     ?0        ?0                   ?0                  	;1
161 87   NOP/0                     ?0        ?0                   ?0                  	;1
162 87   GOTO/253                  ?0        ?169                 ?112                	;0
163 89   NOP/0                     ?0        ?0                   ?0                  	;0	<<159
164 89   FAST_CONCAT/53            #72=      113:'Created New '   16?8                	;0
165 89   ASSIGN/38                 ?56       16?9                 #72                 	;0
166 90   NOP/0                     ?0        ?0                   ?0                  	;1
167 90   NOP/0                     ?0        ?0                   ?0                  	;1
168 90   GOTO/253                  ?0        ?177                 ?114                	;0
169 92   ROPE_INIT/54              #78=      ?0                   115:'Created New '  	;4
170 92   ROPE_ADD/55               #78=      #78                  16?8                	;1
171 92   FETCH_DIM_R/81            $74=      16?6                 116:'package_id'    	;0
172 92   FETCH_DIM_R/81            $75=      16?4                 $74                 	;0
173 92   FETCH_DIM_R/81            $76=      $75                  117:'package_name'  	;0
174 92   ROPE_ADD/55               #78=      #78                  118:' with Package:<br/>'	;2
175 92   ROPE_END/56               #77=      #78                  $76                 	;3
176 92   ASSIGN/38                 ?63       16?9                 #77                 	;0
177 94   FREE/70                   ?0        $69                  ?2                  	;1
178 94   NOP/0                     ?0        ?0                   ?0                  	;1
179 94   GOTO/253                  ?0        ?304                 ?119                	;0
180 96   FETCH_DIM_R/81            $81=      16?6                 120:'package_id'    	;0	<<142
181 96   JMPZ/43                   ?0        $81                  ?185                	;0	>>185
182 97   NOP/0                     ?0        ?0                   ?0                  	;1
183 97   NOP/0                     ?0        ?0                   ?0                  	;1
184 97   GOTO/253                  ?0        ?191                 ?121                	;0
185 99   NOP/0                     ?0        ?0                   ?0                  	;0	<<181
186 99   FAST_CONCAT/53            #82=      122:'Extended '      16?8                	;0
187 99   ASSIGN/38                 ?66       16?9                 #82                 	;0
188 100  NOP/0                     ?0        ?0                   ?0                  	;1
189 100  NOP/0                     ?0        ?0                   ?0                  	;1
190 100  GOTO/253                  ?0        ?199                 ?123                	;0
191 102  ROPE_INIT/54              #88=      ?0                   124:'Extended '     	;4
192 102  ROPE_ADD/55               #88=      #88                  16?8                	;1
193 102  FETCH_DIM_R/81            $84=      16?6                 125:'package_id'    	;0
194 102  FETCH_DIM_R/81            $85=      16?4                 $84                 	;0
195 102  FETCH_DIM_R/81            $86=      $85                  126:'package_name'  	;0
196 102  ROPE_ADD/55               #88=      #88                  127:' with Package:<br/>'	;2
197 102  ROPE_END/56               #87=      #88                  $86                 	;3
198 102  ASSIGN/38                 ?73       16?9                 #87                 	;0
199 104  FREE/70                   ?0        $69                  ?2                  	;1
200 104  NOP/0                     ?0        ?0                   ?0                  	;1
201 104  GOTO/253                  ?0        ?304                 ?128                	;0
202 106  ASSIGN/38                 ?74       16?9                 129:'Converted Device to User Line'	;0	<<144
203 107  FREE/70                   ?0        $69                  ?2                  	;1
204 107  NOP/0                     ?0        ?0                   ?0                  	;1
205 107  GOTO/253                  ?0        ?304                 ?130                	;0
206 109  NOP/0                     ?0        ?0                   ?0                  	;0	<<146
207 109  FAST_CONCAT/53            #92=      131:'Edited '        16?8                	;0
208 109  ASSIGN/38                 ?76       16?9                 #92                 	;0
209 110  FREE/70                   ?0        $69                  ?2                  	;1
210 110  NOP/0                     ?0        ?0                   ?0                  	;1
211 110  GOTO/253                  ?0        ?304                 ?132                	;0
212 112  NOP/0                     ?0        ?0                   ?0                  	;0	<<148
213 112  FAST_CONCAT/53            #94=      133:'Enabled '       16?8                	;0
214 112  ASSIGN/38                 ?78       16?9                 #94                 	;0
215 113  FREE/70                   ?0        $69                  ?2                  	;1
216 113  NOP/0                     ?0        ?0                   ?0                  	;1
217 113  GOTO/253                  ?0        ?304                 ?134                	;0
218 115  NOP/0                     ?0        ?0                   ?0                  	;0	<<150
219 115  FAST_CONCAT/53            #96=      135:'Disabled '      16?8                	;0
220 115  ASSIGN/38                 ?80       16?9                 #96                 	;0
221 116  FREE/70                   ?0        $69                  ?2                  	;1
222 116  NOP/0                     ?0        ?0                   ?0                  	;1
223 116  GOTO/253                  ?0        ?304                 ?136                	;0
224 118  NOP/0                     ?0        ?0                   ?0                  	;0	<<152
225 118  FAST_CONCAT/53            #98=      137:'Deleted '       16?8                	;0
226 118  ASSIGN/38                 ?82       16?9                 #98                 	;0
227 119  FREE/70                   ?0        $69                  ?2                  	;1
228 119  NOP/0                     ?0        ?0                   ?0                  	;1
229 119  GOTO/253                  ?0        ?304                 ?138                	;0
230 121  NOP/0                     ?0        ?0                   ?0                  	;0	<<154
231 121  FAST_CONCAT/53            #100=     139:'Sent Event to ' 16?8                	;0
232 121  ASSIGN/38                 ?84       16?9                 #100                	;0
233 122  FREE/70                   ?0        $69                  ?2                  	;1
234 122  NOP/0                     ?0        ?0                   ?0                  	;1
235 122  GOTO/253                  ?0        ?304                 ?140                	;0
236 124  FETCH_DIM_R/81            $102=     16?6                 141:'cost'          	;0	<<156
237 124  NOP/0                     ?0        ?0                   ?0                  	;0
238 124  FAST_CONCAT/53            #103=     142:'Adjusted Credits by ' $102                	;0
239 124  ASSIGN/38                 ?87       16?9                 #103                	;0
240 125  FREE/70                   ?0        $69                  ?2                  	;1
241 125  NOP/0                     ?0        ?0                   ?0                  	;1
242 125  GOTO/253                  ?0        ?304                 ?143                	;0
243 125  FREE/70                   ?0        $69                  ?0                  	;0	<<157
244 128  NOP/0                     ?0        ?0                   ?0                  	;1
245 128  GOTO/253                  ?0        ?304                 ?144                	;0
246 131  ISSET_ISEMPTY_DIM_OBJ/115 #105=     16?10                145:'mac'           	;33554432
247 131  JMPZ/43                   ?0        #105                 ?250                	;0	>>250
248 132  NOP/0                     ?0        ?0                   ?0                  	;1
249 132  GOTO/253                  ?0        ?256                 ?146                	;0
250 134  FETCH_DIM_R/81            $106=     16?10                147:'username'      	;0	<<247
251 134  CONCAT/8                  #107=     148:'<span class=\'text-secondary\'>' $106                	;0
252 134  CONCAT/8                  #108=     #107                 149:'</span>'       	;0
253 134  ASSIGN/38                 ?92       16?11                #108                	;0
254 135  NOP/0                     ?0        ?0                   ?0                  	;1
255 135  GOTO/253                  ?0        ?301                 ?150                	;0
256 137  NOP/0                     ?0        ?0                   ?0                  	;1
257 137  GOTO/253                  ?0        ?297                 ?151                	;0
258 139  JMPZ/43                   ?0        16?11                ?261                	;0	>>261
259 140  NOP/0                     ?0        ?0                   ?0                  	;1
260 140  GOTO/253                  ?0        ?301                 ?152                	;0
261 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'json_decode'   	;2	<<258
262 142  FETCH_DIM_FUNC_ARG/93     $110=     16?6                 155:'deleted_info'  	;1
263 142  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
264 142  SEND_VAL_EX/116           ?96       156:true             ?2                  	;0
265 142  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
266 142  ASSIGN/38                 ?95       16?10                $111                	;0
267 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'is_array'      	;1
268 143  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
269 143  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
270 143  JMPZ/43                   ?0        $113                 ?273                	;0	>>273
271 144  NOP/0                     ?0        ?0                   ?0                  	;1
272 144  GOTO/253                  ?0        ?246                 ?159                	;0
273 146  ASSIGN/38                 ?97       16?11                160:'<span class=\'text-secondary\'>DELETED</span>'	;0	<<270
274 147  NOP/0                     ?0        ?0                   ?0                  	;1
275 147  GOTO/253                  ?0        ?301                 ?161                	;0
276 148  NOP/0                     ?0        ?0                   ?0                  	;1
277 148  GOTO/253                  ?0        ?246                 ?162                	;0
278 150  ECHO/40                   ?0        163:'</td>
                                        <td class="text-center">' ?0                  	;0
279 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'date'          	;2
280 151  FETCH_DIM_R/81            $115=     16?12                166:'date_format'   	;0
281 151  CONCAT/8                  #116=     $115                 167:' H:i'          	;0
282 151  SEND_VAL_EX/116           ?80       #116                 ?1                  	;0
283 151  FETCH_DIM_FUNC_ARG/93     $117=     16?6                 168:'date'          	;2
284 151  SEND_VAR_EX/66            ?96       $117                 ?2                  	;0
285 151  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
286 151  ECHO/40                   ?0        $118                 ?0                  	;0
287 152  ECHO/40                   ?0        169:'</td>
                                    </tr>
                                    ' ?0                  	;0
288 154  NOP/0                     ?0        ?0                   ?0                  	;1
289 154  GOTO/253                  ?0        ?403                 ?170                	;0
290 156  ECHO/40                   ?0        16?7                 ?0                  	;0
291 157  ECHO/40                   ?0        171:'</td>
                                        <td class="text-center">' ?0                  	;0
292 158  ECHO/40                   ?0        16?11                ?0                  	;0
293 159  ECHO/40                   ?0        172:'</td>
                                        <td>' ?0                  	;0
294 160  ECHO/40                   ?0        16?9                 ?0                  	;0
295 161  NOP/0                     ?0        ?0                   ?0                  	;1
296 161  GOTO/253                  ?0        ?278                 ?173                	;0
297 163  FETCH_DIM_R/81            $119=     16?10                174:'mac'           	;0
298 163  CONCAT/8                  #120=     175:'<span class=\'text-secondary\'>' $119                	;0
299 163  CONCAT/8                  #121=     #120                 176:'</span>'       	;0
300 163  ASSIGN/38                 ?105      16?11                #121                	;0
301 167  ECHO/40                   ?0        177:'                                    <tr>
                                        <td class="text-center">' ?0                  	;0
302 168  NOP/0                     ?0        ?0                   ?0                  	;1
303 168  GOTO/253                  ?0        ?290                 ?178                	;0
304 171  ASSIGN/38                 ?106      16?11                179:NULL            	;0
305 172  FETCH_DIM_R/81            $124=     16?6                 180:'type'          	;0
306 172  SWITCH_STRING/188         ?0        $124                 181:array (
  'line' => 316,
  'user' => 337,
  'mag' => 358,
  'enigma' => 379,
)	;400
307 173  CASE/48                   #125=     $124                 182:'line'          	;0	>>309
308 173  JMPNZ/44                  ?0        #125                 ?316                	;0	>>316
309 181  CASE/48                   #125=     $124                 183:'user'          	;0	>>311	<<307
310 181  JMPNZ/44                  ?0        #125                 ?337                	;0	>>337
311 189  CASE/48                   #125=     $124                 184:'mag'           	;0	>>313	<<309
312 189  JMPNZ/44                  ?0        #125                 ?358                	;0	>>358
313 197  CASE/48                   #125=     $124                 185:'enigma'        	;0	>>315	<<311
314 197  JMPNZ/44                  ?0        #125                 ?379                	;0	>>379
315 197  JMP/42                    ?0        ?400                 ?0                  	;0	>>400	<<313
316 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'b5Ad1D95A92ce732'	;1	<<308
317 174  FETCH_DIM_FUNC_ARG/93     $126=     16?6                 188:'log_id'        	;1
318 174  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
319 174  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
320 174  ASSIGN/38                 ?111      16?13                $127                	;0
321 175  BOOL_NOT/13               #129=     16?13                ?0                  	;0
322 175  JMPZ/43                   ?0        #129                 ?326                	;0	>>326
323 176  NOP/0                     ?0        ?0                   ?0                  	;1
324 176  NOP/0                     ?0        ?0                   ?0                  	;1
325 176  GOTO/253                  ?0        ?334                 ?189                	;0
326 178  FETCH_DIM_R/81            $130=     16?6                 190:'log_id'        	;0	<<322
327 178  ROPE_INIT/54              #133=     ?0                   191:'<a class=\'text-dark\' href=\'line?id='	;5
328 178  ROPE_ADD/55               #133=     #133                 $130                	;1
329 178  FETCH_DIM_R/81            $131=     16?13                192:'username'      	;0
330 178  ROPE_ADD/55               #133=     #133                 193:'\'>'           	;2
331 178  ROPE_ADD/55               #133=     #133                 $131                	;3
332 178  ROPE_END/56               #132=     #133                 194:'</a>'          	;4
333 178  ASSIGN/38                 ?119      16?11                #132                	;0
334 180  FREE/70                   ?0        $124                 ?5                  	;1
335 180  NOP/0                     ?0        ?0                   ?0                  	;1
336 180  GOTO/253                  ?0        ?401                 ?195                	;0
337 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'ba89228dC958Ce05'	;1	<<310
338 182  FETCH_DIM_FUNC_ARG/93     $137=     16?6                 198:'log_id'        	;1
339 182  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
340 182  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
341 182  ASSIGN/38                 ?122      16?13                $138                	;0
342 183  BOOL_NOT/13               #140=     16?13                ?0                  	;0
343 183  JMPZ/43                   ?0        #140                 ?347                	;0	>>347
344 184  NOP/0                     ?0        ?0                   ?0                  	;1
345 184  NOP/0                     ?0        ?0                   ?0                  	;1
346 184  GOTO/253                  ?0        ?355                 ?199                	;0
347 186  FETCH_DIM_R/81            $141=     16?6                 200:'log_id'        	;0	<<343
348 186  ROPE_INIT/54              #144=     ?0                   201:'<a class=\'text-dark\' href=\'user?id='	;5
349 186  ROPE_ADD/55               #144=     #144                 $141                	;1
350 186  FETCH_DIM_R/81            $142=     16?13                202:'username'      	;0
351 186  ROPE_ADD/55               #144=     #144                 203:'\'>'           	;2
352 186  ROPE_ADD/55               #144=     #144                 $142                	;3
353 186  ROPE_END/56               #143=     #144                 204:'</a>'          	;4
354 186  ASSIGN/38                 ?130      16?11                #143                	;0
355 188  FREE/70                   ?0        $124                 ?5                  	;1
356 188  NOP/0                     ?0        ?0                   ?0                  	;1
357 188  GOTO/253                  ?0        ?401                 ?205                	;0
358 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'a32d85AEFA28959D'	;1	<<312
359 190  FETCH_DIM_FUNC_ARG/93     $148=     16?6                 208:'log_id'        	;1
360 190  SEND_VAR_EX/66            ?80       $148                 ?1                  	;0
361 190  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
362 190  ASSIGN/38                 ?133      16?13                $149                	;0
363 191  BOOL_NOT/13               #151=     16?13                ?0                  	;0
364 191  JMPZ/43                   ?0        #151                 ?368                	;0	>>368
365 192  NOP/0                     ?0        ?0                   ?0                  	;1
366 192  NOP/0                     ?0        ?0                   ?0                  	;1
367 192  GOTO/253                  ?0        ?376                 ?209                	;0
368 194  FETCH_DIM_R/81            $152=     16?6                 210:'log_id'        	;0	<<364
369 194  ROPE_INIT/54              #155=     ?0                   211:'<a class=\'text-dark\' href=\'mag?id='	;5
370 194  ROPE_ADD/55               #155=     #155                 $152                	;1
371 194  FETCH_DIM_R/81            $153=     16?13                212:'mac'           	;0
372 194  ROPE_ADD/55               #155=     #155                 213:'\'>'           	;2
373 194  ROPE_ADD/55               #155=     #155                 $153                	;3
374 194  ROPE_END/56               #154=     #155                 214:'</a>'          	;4
375 194  ASSIGN/38                 ?141      16?11                #154                	;0
376 196  FREE/70                   ?0        $124                 ?5                  	;1
377 196  NOP/0                     ?0        ?0                   ?0                  	;1
378 196  GOTO/253                  ?0        ?401                 ?215                	;0
379 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'Ef70a93E98fB7Ce9'	;1	<<314
380 198  FETCH_DIM_FUNC_ARG/93     $159=     16?6                 218:'log_id'        	;1
381 198  SEND_VAR_EX/66            ?80       $159                 ?1                  	;0
382 198  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
383 198  ASSIGN/38                 ?144      16?13                $160                	;0
384 199  BOOL_NOT/13               #162=     16?13                ?0                  	;0
385 199  JMPZ/43                   ?0        #162                 ?389                	;0	>>389
386 200  NOP/0                     ?0        ?0                   ?0                  	;1
387 200  NOP/0                     ?0        ?0                   ?0                  	;1
388 200  GOTO/253                  ?0        ?397                 ?219                	;0
389 202  FETCH_DIM_R/81            $163=     16?6                 220:'log_id'        	;0	<<385
390 202  ROPE_INIT/54              #166=     ?0                   221:'<a class=\'text-dark\' href=\'enigma?id='	;5
391 202  ROPE_ADD/55               #166=     #166                 $163                	;1
392 202  FETCH_DIM_R/81            $164=     16?13                222:'mac'           	;0
393 202  ROPE_ADD/55               #166=     #166                 223:'\'>'           	;2
394 202  ROPE_ADD/55               #166=     #166                 $164                	;3
395 202  ROPE_END/56               #165=     #166                 224:'</a>'          	;4
396 202  ASSIGN/38                 ?152      16?11                #165                	;0
397 204  FREE/70                   ?0        $124                 ?5                  	;1
398 204  NOP/0                     ?0        ?0                   ?0                  	;1
399 204  GOTO/253                  ?0        ?401                 ?225                	;0
400 204  FREE/70                   ?0        $124                 ?0                  	;0	<<315
401 208  NOP/0                     ?0        ?0                   ?0                  	;1
402 208  GOTO/253                  ?0        ?258                 ?226                	;0
403 209  JMP/42                    ?0        ?123                 ?0                  	;0	>>123
404 209  FE_FREE/127               ?0        $57                  ?0                  	;0	<<122
405 212  GOTO/253                  ?0        ?503                 ?227                	;0
406 214  ECHO/40                   ?0        228:'Total Credits'  ?0                  	;0
407 215  GOTO/253                  ?0        ?409                 ?229                	;0
408 217  ECHO/40                   ?0        230:'Assigned Credits' ?0                  	;0
409 219  GOTO/253                  ?0        ?96                  ?231                	;0
410 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'preg_replace'  	;3
411 221  SEND_VAL_EX/116           ?80       234:'/(&#x*[0-9A-F]+);*/iu' ?1                  	;0
412 221  SEND_VAL_EX/116           ?96       235:'$1;'            ?2                  	;0
413 221  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
414 221  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
415 221  ASSIGN/38                 ?154      16?3                 $170                	;0
416 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'html_entity_decode'	;3
417 222  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
418 222  FETCH_CONSTANT/99         #172=     ?0                   238:'ENT_COMPAT'    	;16
419 222  SEND_VAL_EX/116           ?96       #172                 ?2                  	;0
420 222  SEND_VAL_EX/116           ?112      241:'UTF-8'          ?3                  	;0
421 222  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
422 222  ASSIGN/38                 ?157      16?3                 $173                	;0
423 223  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'preg_replace'  	;3
424 223  SEND_VAL_EX/116           ?80       244:'#(<[^>]+?[\\x00-\\x20"\'])(?:on|xmlns)[^>]*+[>\\b]?#iu' ?1                  	;0
425 223  SEND_VAL_EX/116           ?96       245:'$1>'            ?2                  	;0
426 223  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
427 223  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
428 223  ASSIGN/38                 ?159      16?3                 $175                	;0
429 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'preg_replace'  	;3
430 224  SEND_VAL_EX/116           ?80       248:'#([a-z]*)[\\x00-\\x20]*=[\\x00-\\x20]*([`\'"]*)[\\x00-\\x20]*j[\\x00-\\x20]*a[\\x00-\\x20]*v[\\x00-\\x20]*a[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu' ?1                  	;0
431 224  SEND_VAL_EX/116           ?96       249:'$1=$2nojavascript...' ?2                  	;0
432 224  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
433 224  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
434 224  ASSIGN/38                 ?161      16?3                 $177                	;0
435 225  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'preg_replace'  	;3
436 225  SEND_VAL_EX/116           ?80       252:'#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*v[\\x00-\\x20]*b[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu' ?1                  	;0
437 225  SEND_VAL_EX/116           ?96       253:'$1=$2novbscript...' ?2                  	;0
438 225  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
439 225  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
440 225  ASSIGN/38                 ?163      16?3                 $179                	;0
441 226  GOTO/253                  ?0        ?61                  ?254                	;0
442 228  INCLUDE_OR_EVAL/73        ?164      255:'session.php'    ?0                  	;2	<<0
443 229  INCLUDE_OR_EVAL/73        ?165      256:'functions.php'  ?0                  	;2
444 230  ASSIGN/38                 ?166      16?14                257:'Dashboard'     	;0
445 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'getResellers'  	;2
446 231  FETCH_DIM_FUNC_ARG/93     $184=     16?0                 260:'id'            	;1
447 231  SEND_VAR_EX/66            ?80       $184                 ?1                  	;0
448 231  SEND_VAL_EX/116           ?96       261:true             ?2                  	;0
449 231  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
450 231  ASSIGN/38                 ?169      16?1                 $185                	;0
451 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'aD052a625c6AC011'	;0
452 232  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
453 232  ASSIGN/38                 ?171      16?15                $187                	;0
454 233  GOTO/253                  ?0        ?471                 ?264                	;0
455 235  GOTO/253                  ?0        ?457                 ?265                	;0
456 237  ECHO/40                   ?0        266:'text-white'     ?0                  	;0
457 239  ECHO/40                   ?0        267:'"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                        <p class="text-white mb-1 text-truncate">Lines Online</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="javascript:void(0);" id="manage_lines">
                    <div class="card cta-box ' ?0                  	;0
458 240  GOTO/253                  ?0        ?459                 ?268                	;0
459 242  FETCH_DIM_R/81            $189=     16?0                 269:'theme'         	;0
460 242  IS_EQUAL/17               #190=     $189                 270:0               	;0
461 242  BOOL_NOT/13               #191=     #190                 ?0                  	;0
462 242  JMPZ/43                   ?0        #191                 ?464                	;0	>>464
463 243  GOTO/253                  ?0        ?465                 ?271                	;0
464 245  ECHO/40                   ?0        272:'bg-pink'        ?0                  	;0	<<462
465 247  ECHO/40                   ?0        273:' text-white">
                        <div class="card-body active-accounts">
                            <div class="media align-items-center">
                                <div class="col-3">
                                    <div class="avatar-sm bg-light">
                                        <i class="fe-check-circle avatar-title font-22 ' ?0                  	;0
466 248  FETCH_DIM_R/81            $192=     16?0                 274:'theme'         	;0
467 248  IS_EQUAL/17               #193=     $192                 275:1               	;0
468 248  JMPZ/43                   ?0        #193                 ?470                	;0	>>470
469 249  GOTO/253                  ?0        ?645                 ?276                	;0
470 251  GOTO/253                  ?0        ?643                 ?277                	;0	<<468
471 253  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'html_entity_decode'	;1
472 253  FETCH_DIM_R/81            $194=     16?0                 280:'member_group_id'	;0
473 253  FETCH_DIM_FUNC_ARG/93     $195=     16?15                $194                	;1
474 253  FETCH_DIM_FUNC_ARG/93     $196=     $195                 281:'notice_html'   	;1
475 253  SEND_VAR_EX/66            ?80       $196                 ?1                  	;0
476 253  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
477 253  ASSIGN/38                 ?181      16?3                 $197                	;0
478 254  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'preg_replace'  	;3
479 254  SEND_VAL_EX/116           ?80       284:'#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i' ?1                  	;0
480 254  SEND_VAL_EX/116           ?96       285:''               ?2                  	;0
481 254  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
482 254  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
483 254  ASSIGN/38                 ?183      16?3                 $199                	;0
484 255  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'preg_replace'  	;3
485 255  SEND_VAL_EX/116           ?80       288:'#</*\\w+:\\w[^>]*+>#i' ?1                  	;0
486 255  SEND_VAL_EX/116           ?96       289:''               ?2                  	;0
487 255  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
488 255  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
489 255  ASSIGN/38                 ?185      16?3                 $201                	;0
490 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'str_replace'   	;3
491 256  SEND_VAL_EX/116           ?80       292:array (
  0 => '&amp;',
  1 => '&lt;',
  2 => '&gt;',
) ?1                  	;0
492 256  SEND_VAL_EX/116           ?96       293:array (
  0 => '&amp;amp;',
  1 => '&amp;lt;',
  2 => '&amp;gt;',
) ?2                  	;0
493 256  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
494 256  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
495 256  ASSIGN/38                 ?187      16?3                 $203                	;0
496 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'preg_replace'  	;3
497 257  SEND_VAL_EX/116           ?80       296:'/(&#*\\w+)[\\x00-\\x20]+;/u' ?1                  	;0
498 257  SEND_VAL_EX/116           ?96       297:'$1;'            ?2                  	;0
499 257  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
500 257  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
501 257  ASSIGN/38                 ?189      16?3                 $205                	;0
502 258  GOTO/253                  ?0        ?410                 ?298                	;0
503 260  ECHO/40                   ?0        299:'                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <a href="lines"><h4 class="header-title mb-4">Expiring Lines</h4></a>
                        <div style="height: 350px; overflow-y: auto;">
                            <table class="table table-striped table-borderless m-0 table-centered dt-responsive nowrap w-100" id="users-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Identity</th>
                                        <th class="text-center">Owner</th>
                                        <th class="text-center">Expires</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ' ?0                  	;0
504 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'ebd26d3621708b16'	;0
505 261  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
506 261  FE_RESET_R/77             $208=     $207                 ?640                	;0
507 261  FE_FETCH_R/78             ?0        $208                 16?16               	;640	>>640	<<639
508 262  NOP/0                     ?0        ?0                   ?0                  	;1
509 262  GOTO/253                  ?0        ?622                 ?302                	;0
510 264  ISSET_ISEMPTY_DIM_OBJ/115 #209=     16?16                303:'reseller_notes'	;16777216
511 264  BOOL_NOT/13               #210=     #209                 ?0                  	;0
512 264  JMPZ/43                   ?0        #210                 ?521                	;0	>>521
513 264  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'htmlspecialchars'	;1
514 264  FETCH_DIM_FUNC_ARG/93     $211=     16?16                306:'reseller_notes'	;1
515 264  SEND_VAR_EX/66            ?80       $211                 ?1                  	;0
516 264  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
517 264  CONCAT/8                  #213=     307:' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' $212                	;0
518 264  CONCAT/8                  #214=     #213                 308:'"><i class="mdi mdi-note"></i></button>'	;0
519 264  QM_ASSIGN/22              #215=     #214                 ?0                  	;0
520 264  JMP/42                    ?0        ?522                 ?0                  	;0	>>522
521 264  QM_ASSIGN/22              #215=     309:''               ?0                  	;0	<<512
522 264  ECHO/40                   ?0        #215                 ?0                  	;0	<<520
523 265  ECHO/40                   ?0        310:'</a></td>
                                        ' ?0                  	;0
524 267  NOP/0                     ?0        ?0                   ?0                  	;1
525 267  GOTO/253                  ?0        ?567                 ?311                	;0
526 269  NOP/0                     ?0        ?0                   ?0                  	;1
527 269  GOTO/253                  ?0        ?576                 ?312                	;0
528 272  ECHO/40                   ?0        313:'                                        <td class="text-center">Enigma2 Device</td>
                                        <td class="text-center"><a class="text-dark" href="enigma?id=' ?0                  	;0
529 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'intval'        	;1
530 273  FETCH_DIM_FUNC_ARG/93     $216=     16?16                316:'e2_id'         	;1
531 273  SEND_VAR_EX/66            ?80       $216                 ?1                  	;0
532 273  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
533 273  ECHO/40                   ?0        $217                 ?0                  	;0
534 274  ECHO/40                   ?0        317:'">'             ?0                  	;0
535 275  INIT_FCALL_BY_NAME/59     ?0        ?0                   318:'htmlspecialchars'	;1
536 275  FETCH_DIM_FUNC_ARG/93     $218=     16?16                320:'e2_mac'        	;1
537 275  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
538 275  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
539 275  ECHO/40                   ?0        $219                 ?0                  	;0
540 276  NOP/0                     ?0        ?0                   ?0                  	;1
541 276  GOTO/253                  ?0        ?510                 ?321                	;0
542 278  ECHO/40                   ?0        322:'">'             ?0                  	;0
543 279  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'htmlspecialchars'	;1
544 279  FETCH_DIM_FUNC_ARG/93     $220=     16?16                325:'username'      	;1
545 279  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
546 279  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
547 279  ECHO/40                   ?0        $221                 ?0                  	;0
548 280  ISSET_ISEMPTY_DIM_OBJ/115 #222=     16?16                326:'reseller_notes'	;16777216
549 280  BOOL_NOT/13               #223=     #222                 ?0                  	;0
550 280  JMPZ/43                   ?0        #223                 ?559                	;0	>>559
551 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'htmlspecialchars'	;1
552 280  FETCH_DIM_FUNC_ARG/93     $224=     16?16                329:'reseller_notes'	;1
553 280  SEND_VAR_EX/66            ?80       $224                 ?1                  	;0
554 280  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
555 280  CONCAT/8                  #226=     330:' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' $225                	;0
556 280  CONCAT/8                  #227=     #226                 331:'"><i class="mdi mdi-note"></i></button>'	;0
557 280  QM_ASSIGN/22              #228=     #227                 ?0                  	;0
558 280  JMP/42                    ?0        ?560                 ?0                  	;0	>>560
559 280  QM_ASSIGN/22              #228=     332:''               ?0                  	;0	<<550
560 280  ECHO/40                   ?0        #228                 ?0                  	;0	<<558
561 281  ECHO/40                   ?0        333:'</a></td>
                                        ' ?0                  	;0
562 282  NOP/0                     ?0        ?0                   ?0                  	;1
563 282  GOTO/253                  ?0        ?524                 ?334                	;0
564 283  NOP/0                     ?0        ?0                   ?0                  	;1
565 283  GOTO/253                  ?0        ?528                 ?335                	;0
566 285  ECHO/40                   ?0        336:'</a></td>
                                        ' ?0                  	;0
567 287  ECHO/40                   ?0        337:'                                        <td class="text-center"><a class="text-dark" href="user?id=' ?0                  	;0
568 288  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'intval'        	;1
569 288  FETCH_DIM_FUNC_ARG/93     $229=     16?16                340:'member_id'     	;1
570 288  SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
571 288  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
572 288  ECHO/40                   ?0        $230                 ?0                  	;0
573 289  ECHO/40                   ?0        341:'">'             ?0                  	;0
574 290  NOP/0                     ?0        ?0                   ?0                  	;1
575 290  GOTO/253                  ?0        ?603                 ?342                	;0
576 292  ECHO/40                   ?0        343:'                                        <td class="text-center">MAG Device</td>
                                        <td class="text-center"><a class="text-dark" href="mag?id=' ?0                  	;0
577 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'intval'        	;1
578 293  FETCH_DIM_FUNC_ARG/93     $231=     16?16                346:'mag_id'        	;1
579 293  SEND_VAR_EX/66            ?80       $231                 ?1                  	;0
580 293  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
581 293  ECHO/40                   ?0        $232                 ?0                  	;0
582 294  ECHO/40                   ?0        347:'">'             ?0                  	;0
583 295  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'htmlspecialchars'	;1
584 295  FETCH_DIM_FUNC_ARG/93     $233=     16?16                350:'mag_mac'       	;1
585 295  SEND_VAR_EX/66            ?80       $233                 ?1                  	;0
586 295  DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
587 295  ECHO/40                   ?0        $234                 ?0                  	;0
588 296  ISSET_ISEMPTY_DIM_OBJ/115 #235=     16?16                351:'reseller_notes'	;16777216
589 296  BOOL_NOT/13               #236=     #235                 ?0                  	;0
590 296  JMPZ/43                   ?0        #236                 ?599                	;0	>>599
591 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   352:'htmlspecialchars'	;1
592 296  FETCH_DIM_FUNC_ARG/93     $237=     16?16                354:'reseller_notes'	;1
593 296  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
594 296  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
595 296  CONCAT/8                  #239=     355:' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' $238                	;0
596 296  CONCAT/8                  #240=     #239                 356:'"><i class="mdi mdi-note"></i></button>'	;0
597 296  QM_ASSIGN/22              #241=     #240                 ?0                  	;0
598 296  JMP/42                    ?0        ?600                 ?0                  	;0	>>600
599 296  QM_ASSIGN/22              #241=     357:''               ?0                  	;0	<<590
600 296  ECHO/40                   ?0        #241                 ?0                  	;0	<<598
601 297  NOP/0                     ?0        ?0                   ?0                  	;1
602 297  GOTO/253                  ?0        ?566                 ?358                	;0
603 299  INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'htmlspecialchars'	;1
604 299  FETCH_DIM_R/81            $242=     16?16                361:'member_id'     	;0
605 299  FETCH_DIM_FUNC_ARG/93     $243=     16?1                 $242                	;1
606 299  FETCH_DIM_FUNC_ARG/93     $244=     $243                 362:'username'      	;1
607 299  SEND_VAR_EX/66            ?80       $244                 ?1                  	;0
608 299  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
609 299  ECHO/40                   ?0        $245                 ?0                  	;0
610 300  ECHO/40                   ?0        363:'</td>
                                        <td class="text-center">' ?0                  	;0
611 301  INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'date'          	;2
612 301  FETCH_DIM_R/81            $246=     16?12                366:'date_format'   	;0
613 301  CONCAT/8                  #247=     $246                 367:' H:i'          	;0
614 301  SEND_VAL_EX/116           ?80       #247                 ?1                  	;0
615 301  FETCH_DIM_FUNC_ARG/93     $248=     16?16                368:'exp_date'      	;2
616 301  SEND_VAR_EX/66            ?96       $248                 ?2                  	;0
617 301  DO_FCALL_BY_NAME/131      $249=     ?0                   ?0                  	;0
618 301  ECHO/40                   ?0        $249                 ?0                  	;0
619 302  ECHO/40                   ?0        369:'</td>
                                    </tr>
                                    ' ?0                  	;0
620 304  NOP/0                     ?0        ?0                   ?0                  	;1
621 304  GOTO/253                  ?0        ?639                 ?370                	;0
622 306  ECHO/40                   ?0        371:'                                    <tr>
                                        ' ?0                  	;0
623 307  FETCH_DIM_R/81            $250=     16?16                372:'is_mag'        	;0
624 307  JMPZ/43                   ?0        $250                 ?627                	;0	>>627
625 308  NOP/0                     ?0        ?0                   ?0                  	;1
626 308  GOTO/253                  ?0        ?526                 ?373                	;0
627 310  FETCH_DIM_R/81            $251=     16?16                374:'is_e2'         	;0	<<624
628 310  JMPZ/43                   ?0        $251                 ?631                	;0	>>631
629 311  NOP/0                     ?0        ?0                   ?0                  	;1
630 311  GOTO/253                  ?0        ?528                 ?375                	;0
631 313  ECHO/40                   ?0        376:'                                        <td class="text-center">User Line</td>
                                        <td class="text-center"><a class="text-dark" href="line?id=' ?0                  	;0	<<628
632 314  INIT_FCALL_BY_NAME/59     ?0        ?0                   377:'intval'        	;1
633 314  FETCH_DIM_FUNC_ARG/93     $252=     16?16                379:'line_id'       	;1
634 314  SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
635 314  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
636 314  ECHO/40                   ?0        $253                 ?0                  	;0
637 315  NOP/0                     ?0        ?0                   ?0                  	;1
638 315  GOTO/253                  ?0        ?542                 ?380                	;0
639 316  JMP/42                    ?0        ?507                 ?0                  	;0	>>507
640 316  FE_FREE/127               ?0        $208                 ?0                  	;0	<<506
641 319  ECHO/40                   ?0        381:'                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
' ?0                  	;0
642 320  GOTO/253                  ?0        ?671                 ?382                	;0
643 322  ECHO/40                   ?0        383:'text-pink'      ?0                  	;0
644 323  GOTO/253                  ?0        ?646                 ?384                	;0
645 325  ECHO/40                   ?0        385:'text-white'     ?0                  	;0
646 327  GOTO/253                  ?0        ?26                  ?386                	;0
647 329  ECHO/40                   ?0        16?3                 ?0                  	;0
648 330  ECHO/40                   ?0        387:'                </div>
                ' ?0                  	;0
649 332  ECHO/40                   ?0        388:'            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a href="' ?0                  	;0
650 333  FETCH_DIM_R/81            $254=     16?2                 389:'reseller_client_connection_logs'	;0
651 333  JMPZ/43                   ?0        $254                 ?654                	;0	>>654
652 333  QM_ASSIGN/22              #255=     390:'live_connections' ?0                  	;0
653 333  JMP/42                    ?0        ?655                 ?0                  	;0	>>655
654 333  QM_ASSIGN/22              #255=     391:'javascript: void(0);' ?0                  	;0	<<651
655 333  ECHO/40                   ?0        #255                 ?0                  	;0	<<653
656 334  GOTO/253                  ?0        ?87                  ?392                	;0
657 337  ECHO/40                   ?0        393:'"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                        <p class="text-white mb-1 text-truncate">Connections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="' ?0                  	;0
658 338  FETCH_DIM_R/81            $256=     16?2                 394:'reseller_client_connection_logs'	;0
659 338  JMPZ/43                   ?0        $256                 ?662                	;0	>>662
660 338  QM_ASSIGN/22              #257=     395:'live_connections' ?0                  	;0
661 338  JMP/42                    ?0        ?663                 ?0                  	;0	>>663
662 338  QM_ASSIGN/22              #257=     396:'javascript: void(0);' ?0                  	;0	<<659
663 338  ECHO/40                   ?0        #257                 ?0                  	;0	<<661
664 339  ECHO/40                   ?0        397:'">
                    <div class="card cta-box ' ?0                  	;0
665 340  FETCH_DIM_R/81            $258=     16?0                 398:'theme'         	;0
666 340  IS_EQUAL/17               #259=     $258                 399:0               	;0
667 340  BOOL_NOT/13               #260=     #259                 ?0                  	;0
668 340  JMPZ/43                   ?0        #260                 ?670                	;0	>>670
669 341  GOTO/253                  ?0        ?10                  ?400                	;0
670 343  GOTO/253                  ?0        ?9                   ?401                	;0	<<668
671 345  INCLUDE_OR_EVAL/73        ?244      402:'footer.php'     ?0                  	;2
672 346  NOP/0                     ?0        403:1                ?0                  	;4294967295
*/

?>