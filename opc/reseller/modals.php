<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?176                 ?0                  	;0	>>176
1   5    FETCH_DIM_R/81            $5=       16?0                 1:'send_message'    	;0
2   5    ECHO/40                   ?0        $5                   ?0                  	;0
3   6    ECHO/40                   ?0        2:'</option>
                            <option value="cut_off">' ?0                  	;0
4   7    FETCH_DIM_R/81            $6=       16?0                 3:'close_portal'    	;0
5   7    ECHO/40                   ?0        $6                   ?0                  	;0
6   8    ECHO/40                   ?0        4:'</option>
                            <option value="reset_stb_lock">' ?0                  	;0
7   9    FETCH_DIM_R/81            $7=       16?0                 5:'reset_stb_lock'  	;0
8   9    ECHO/40                   ?0        $7                   ?0                  	;0
9   10   GOTO/253                  ?0        ?18                  ?6                  	;0
10  12   ECHO/40                   ?0        7:'</td>
                                    <td class="text-center" id="cost_credits">0</td>
                                    <td class="text-center" id="remaining_credits">0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <button class="btn btn-info waves-effect waves-light" style="width:100%;" type="button" onClick="submitCredits();" id="credits_submit">Adjust Credits</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
' ?0                  	;0
11  14   ECHO/40                   ?0        8:'<div class="modal fade bs-type-modal-center" tabindex="-1" role="dialog" aria-labelledby="typeLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="typeLabel">Manage Lines</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    ' ?0                  	;0
12  15   FETCH_DIM_R/81            $8=       16?1                 9:'create_line'     	;0
13  15   BOOL_NOT/13               #9=       $8                   ?0                  	;0
14  15   JMPZ/43                   ?0        #9                   ?16                 	;0	>>16
15  16   GOTO/253                  ?0        ?80                  ?10                 	;0
16  18   ECHO/40                   ?0        11:'                    <div class="col-md-12">
                        <a href="lines"><button type="button" class="btn btn-dark" style="width:100%">User Lines</button></a>
                    </div>
                    ' ?0                  	;0	<<14
17  19   GOTO/253                  ?0        ?80                  ?12                 	;0
18  21   ECHO/40                   ?0        13:'</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-12" style="margin-top:20px;display:none;" id="send_msg_form">
                    <div class="form-group row mb-4">
                        <div class="col-md-12">
                            <textarea id="message" name="message" class="form-control" rows="3" placeholder="' ?0                  	;0
19  22   FETCH_DIM_R/81            $10=      16?0                 14:'enter_a_custom_message'	;0
20  22   ECHO/40                   ?0        $10                  ?0                  	;0
21  23   ECHO/40                   ?0        15:'..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-md-9 col-form-label" for="reboot_portal">' ?0                  	;0
22  24   FETCH_DIM_R/81            $11=      16?0                 16:'reboot_on_confirmation'	;0
23  24   ECHO/40                   ?0        $11                  ?0                  	;0
24  25   ECHO/40                   ?0        17:'</label>
                        <div class="col-md-3">
                            <input name="reboot_portal" id="reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="margin-top:20px;display:none;" id="play_channel_form">
                    <div class="form-group row mb-4">
                        <label class="col-md-3 col-form-label" for="selected_channel">' ?0                  	;0
25  26   GOTO/253                  ?0        ?62                  ?18                 	;0
26  28   ECHO/40                   ?0        19:'                            <option value="reload_portal">' ?0                  	;0
27  29   FETCH_DIM_R/81            $12=      16?0                 20:'reload_portal'  	;0
28  29   ECHO/40                   ?0        $12                  ?0                  	;0
29  30   ECHO/40                   ?0        21:'</option>
                            <option value="reboot">' ?0                  	;0
30  31   FETCH_DIM_R/81            $13=      16?0                 22:'reboot_device'  	;0
31  31   ECHO/40                   ?0        $13                  ?0                  	;0
32  32   ECHO/40                   ?0        23:'</option>
                            <option value="send_msg">' ?0                  	;0
33  33   GOTO/253                  ?0        ?1                   ?24                 	;0
34  36   ECHO/40                   ?0        25:'<div class="modal fade bs-whois-modal-center" tabindex="-1" role="dialog" aria-labelledby="whoisLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="whoisLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="table mb-0" id="whois-table">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">GEOLOCATION</th>
                        </tr>
                        <tr>
                            <th scope="row">Continent</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Country</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">City</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Postcode</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Lat Lng</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">ISP</th>
                        </tr>
                        <tr>
                            <th scope="row">ISP Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Organisation</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">AS Number</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">LOCALE</th>
                        </tr>
                        <tr>
                            <th scope="row">Timezone</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Local Time</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
' ?0                  	;0
35  37   FETCH_DIM_R/81            $14=      16?1                 26:'allow_download' 	;0
36  37   BOOL_NOT/13               #15=      $14                  ?0                  	;0
37  37   JMPZ/43                   ?0        #15                  ?39                 	;0	>>39
38  38   GOTO/253                  ?0        ?171                 ?27                 	;0
39  40   ECHO/40                   ?0        28:'<div class="modal fade downloadModal" role="dialog" aria-labelledby="downloadLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="downloadModal">Download Playlist</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="download_type">Format</label>
                    <div class="col-8">
                        <select id="download_type" class="form-control" data-toggle="select2">
                            ' ?0                  	;0	<<37
40  41   INIT_METHOD_CALL/112      ?0        16?2                 29:'query'          	;1
41  41   SEND_VAL_EX/116           ?80       31:'SELECT * FROM `output_devices` ORDER BY `device_id` ASC;' ?1                  	;0
42  41   DO_FCALL/60               ?11       ?0                   ?0                  	;0
43  42   GOTO/253                  ?0        ?90                  ?32                 	;0
44  44   FETCH_DIM_R/81            $17=      16?1                 33:'create_sub_resellers'	;0
45  44   BOOL_NOT/13               #18=      $17                  ?0                  	;0
46  44   JMPZ/43                   ?0        #18                  ?48                 	;0	>>48
47  45   GOTO/253                  ?0        ?11                  ?34                 	;0
48  47   ECHO/40                   ?0        35:'<div class="modal fade creditsModal" role="dialog" aria-labelledby="creditsLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="creditsModal"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert" id="indirect">
                    This user does not directly report to you, by adding credits you will be spending your own credits and not the credits of this users\' owner.
                </div>
                <div class="form-group row">
                    <label class="col-md-8 col-form-label" for="credits">Adjust Credits (+ / -)</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <table class="table table-striped table-borderless" id="credits-cost">
                            <thead>
                                <tr>
                                    <th class="text-center">My Credits</th>
                                    <th class="text-center">Adjustment Cost</th>
                                    <th class="text-center">Remaining Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" id="total_credits" data-credits="' ?0                  	;0	<<46
49  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
50  48   FETCH_DIM_FUNC_ARG/93     $19=      16?3                 38:'credits'        	;1
51  48   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
52  48   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
53  48   ECHO/40                   ?0        $20                  ?0                  	;0
54  49   ECHO/40                   ?0        39:'">'              ?0                  	;0
55  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'number_format'  	;2
56  50   FETCH_DIM_FUNC_ARG/93     $21=      16?3                 42:'credits'        	;1
57  50   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
58  50   SEND_VAL_EX/116           ?96       43:0                 ?2                  	;0
59  50   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
60  50   ECHO/40                   ?0        $22                  ?0                  	;0
61  51   GOTO/253                  ?0        ?10                  ?44                 	;0
62  53   FETCH_DIM_R/81            $23=      16?0                 45:'channel'        	;0
63  53   ECHO/40                   ?0        $23                  ?0                  	;0
64  54   ECHO/40                   ?0        46:'</label>
                        <div class="col-md-9">
                            <select id="selected_channel" name="selected_channel" class="form-control" data-toggle="select2" style="width:100%;"></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button disabled id="message_submit" type="button" class="btn btn-primary waves-effect">' ?0                  	;0
65  55   FETCH_DIM_R/81            $24=      16?0                 47:'send_event'     	;0
66  55   ECHO/40                   ?0        $24                  ?0                  	;0
67  56   ECHO/40                   ?0        48:'</button>
            </div>
        </div>
    </div>
</div>
' ?0                  	;0
68  58   GOTO/253                  ?0        ?44                  ?49                 	;0
69  60   ECHO/40                   ?0        50:'                    <div class="col-md-12">
                        <a href="enigmas"><button type="button" class="btn btn-dark" style="width:100%">Enigma Devices</button></a>
                    </div>
                    ' ?0                  	;0
70  62   GOTO/253                  ?0        ?200                 ?51                 	;0
71  64   FETCH_DIM_R/81            $25=      16?1                 52:'can_view_vod'   	;0
72  64   BOOL_NOT/13               #26=      $25                  ?0                  	;0
73  64   JMPZ/43                   ?0        #26                  ?75                 	;0	>>75
74  65   GOTO/253                  ?0        ?79                  ?53                 	;0
75  67   ECHO/40                   ?0        54:'                            <option value="play_channel">' ?0                  	;0	<<73
76  68   FETCH_DIM_R/81            $27=      16?0                 55:'play_channel'   	;0
77  68   ECHO/40                   ?0        $27                  ?0                  	;0
78  69   ECHO/40                   ?0        56:'</option>
                            ' ?0                  	;0
79  71   GOTO/253                  ?0        ?26                  ?57                 	;0
80  74   FETCH_DIM_R/81            $28=      16?1                 58:'create_mag'     	;0
81  74   BOOL_NOT/13               #29=      $28                  ?0                  	;0
82  74   JMPZ/43                   ?0        #29                  ?84                 	;0	>>84
83  75   GOTO/253                  ?0        ?85                  ?59                 	;0
84  77   ECHO/40                   ?0        60:'                    <div class="col-md-12">
                        <a href="mags"><button type="button" class="btn btn-dark" style="width:100%">MAG Devices</button></a>
                    </div>
                    ' ?0                  	;0	<<82
85  79   FETCH_DIM_R/81            $30=      16?1                 61:'create_enigma'  	;0
86  79   BOOL_NOT/13               #31=      $30                  ?0                  	;0
87  79   JMPZ/43                   ?0        #31                  ?89                 	;0	>>89
88  80   GOTO/253                  ?0        ?70                  ?62                 	;0
89  82   GOTO/253                  ?0        ?69                  ?63                 	;0	<<87
90  84   INIT_METHOD_CALL/112      ?0        16?2                 64:'get_rows'       	;0
91  84   DO_FCALL/60               $32=      ?0                   ?0                  	;0
92  84   FE_RESET_R/77             $33=      $32                  ?169                	;0
93  84   FE_FETCH_R/78             ?0        $33                  16?4                	;169	>>169	<<168
94  85   FETCH_DIM_R/81            $34=      16?4                 66:'copy_text'      	;0
95  85   JMPZ/43                   ?0        $34                  ?98                 	;0	>>98
96  86   NOP/0                     ?0        ?0                   ?0                  	;1
97  86   GOTO/253                  ?0        ?122                 ?67                 	;0
98  88   FETCH_DIM_R/81            $35=      16?4                 68:'device_name'    	;0	<<95
99  88   CONCAT/8                  #36=      69:'<optgroup label="' $35                 	;0
100 88   CONCAT/8                  #37=      #36                  70:'"><option value="'	;0
101 88   FETCH_DIM_R/81            $38=      16?4                 71:'device_key'     	;0
102 88   CONCAT/8                  #39=      #37                  $38                 	;0
103 88   CONCAT/8                  #40=      #39                  72:'?output=hls">'  	;0
104 88   FETCH_DIM_R/81            $41=      16?4                 73:'device_name'    	;0
105 88   CONCAT/8                  #42=      #40                  $41                 	;0
106 88   CONCAT/8                  #43=      #42                  74:' - HLS </option><option value="'	;0
107 88   FETCH_DIM_R/81            $44=      16?4                 75:'device_key'     	;0
108 88   CONCAT/8                  #45=      #43                  $44                 	;0
109 88   CONCAT/8                  #46=      #45                  76:'">'             	;0
110 88   FETCH_DIM_R/81            $47=      16?4                 77:'device_name'    	;0
111 88   CONCAT/8                  #48=      #46                  $47                 	;0
112 88   CONCAT/8                  #49=      #48                  78:' - MPEGTS</option><option value="'	;0
113 88   FETCH_DIM_R/81            $50=      16?4                 79:'device_key'     	;0
114 88   CONCAT/8                  #51=      #49                  $50                 	;0
115 88   CONCAT/8                  #52=      #51                  80:'?output=rtmp">' 	;0
116 88   FETCH_DIM_R/81            $53=      16?4                 81:'device_name'    	;0
117 88   CONCAT/8                  #54=      #52                  $53                 	;0
118 88   CONCAT/8                  #55=      #54                  82:' - RTMP</option></optgroup>'	;0
119 88   ECHO/40                   ?0        #55                  ?0                  	;0
120 89   NOP/0                     ?0        ?0                   ?0                  	;1
121 89   GOTO/253                  ?0        ?168                 ?83                 	;0
122 91   FETCH_DIM_R/81            $56=      16?4                 84:'device_name'    	;0
123 91   CONCAT/8                  #57=      85:'<optgroup label="' $56                 	;0
124 91   CONCAT/8                  #58=      #57                  86:'"><option data-text="'	;0
125 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'str_replace'    	;3
126 91   SEND_VAL_EX/116           ?80       89:'"'               ?1                  	;0
127 91   SEND_VAL_EX/116           ?96       90:'\\"'             ?2                  	;0
128 91   FETCH_DIM_FUNC_ARG/93     $59=      16?4                 91:'copy_text'      	;3
129 91   SEND_VAR_EX/66            ?112      $59                  ?3                  	;0
130 91   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
131 91   CONCAT/8                  #61=      #58                  $60                 	;0
132 91   CONCAT/8                  #62=      #61                  92:'" value="'      	;0
133 91   FETCH_DIM_R/81            $63=      16?4                 93:'device_key'     	;0
134 91   CONCAT/8                  #64=      #62                  $63                 	;0
135 91   CONCAT/8                  #65=      #64                  94:'?output=hls">'  	;0
136 91   FETCH_DIM_R/81            $66=      16?4                 95:'device_name'    	;0
137 91   CONCAT/8                  #67=      #65                  $66                 	;0
138 91   CONCAT/8                  #68=      #67                  96:' - HLS </option><option data-text="'	;0
139 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'str_replace'    	;3
140 91   SEND_VAL_EX/116           ?80       99:'"'               ?1                  	;0
141 91   SEND_VAL_EX/116           ?96       100:'\\"'            ?2                  	;0
142 91   FETCH_DIM_FUNC_ARG/93     $69=      16?4                 101:'copy_text'     	;3
143 91   SEND_VAR_EX/66            ?112      $69                  ?3                  	;0
144 91   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
145 91   CONCAT/8                  #71=      #68                  $70                 	;0
146 91   CONCAT/8                  #72=      #71                  102:'" value="'     	;0
147 91   FETCH_DIM_R/81            $73=      16?4                 103:'device_key'    	;0
148 91   CONCAT/8                  #74=      #72                  $73                 	;0
149 91   CONCAT/8                  #75=      #74                  104:'">'            	;0
150 91   FETCH_DIM_R/81            $76=      16?4                 105:'device_name'   	;0
151 91   CONCAT/8                  #77=      #75                  $76                 	;0
152 91   CONCAT/8                  #78=      #77                  106:' - MPEGTS</option><option data-text="'	;0
153 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'str_replace'   	;3
154 91   SEND_VAL_EX/116           ?80       109:'"'              ?1                  	;0
155 91   SEND_VAL_EX/116           ?96       110:'\\"'            ?2                  	;0
156 91   FETCH_DIM_FUNC_ARG/93     $79=      16?4                 111:'copy_text'     	;3
157 91   SEND_VAR_EX/66            ?112      $79                  ?3                  	;0
158 91   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
159 91   CONCAT/8                  #81=      #78                  $80                 	;0
160 91   CONCAT/8                  #82=      #81                  112:'" value="'     	;0
161 91   FETCH_DIM_R/81            $83=      16?4                 113:'device_key'    	;0
162 91   CONCAT/8                  #84=      #82                  $83                 	;0
163 91   CONCAT/8                  #85=      #84                  114:'?output=rtmp">'	;0
164 91   FETCH_DIM_R/81            $86=      16?4                 115:'device_name'   	;0
165 91   CONCAT/8                  #87=      #85                  $86                 	;0
166 91   CONCAT/8                  #88=      #87                  116:' - RTMP</option></optgroup>'	;0
167 91   ECHO/40                   ?0        #88                  ?0                  	;0
168 93   JMP/42                    ?0        ?93                  ?0                  	;0	>>93
169 93   FE_FREE/127               ?0        $33                  ?0                  	;0	<<92
170 96   ECHO/40                   ?0        117:'                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="output_type">Limit Output</label>
                    <div class="col-8">
                        <select id="output_type" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                            <option value="live">Live Streams</option>
                            <option value="movie">Movies</option>
                            <option value="created_live">Created Channels</option>
                            <option value="radio_streams">Radio Stations</option>
                            <option value="series">TV Series</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" id="download_url" value="">
                            <div class="input-group-append">
                                <button class="btn btn-warning waves-effect waves-light" type="button" onClick="copyDownload();"><i class="mdi mdi-content-copy"></i></button>
                                <button class="btn btn-info waves-effect waves-light" type="button" onClick="doDownload();" id="download_button" disabled><i class="mdi mdi-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
' ?0                  	;0
171 98   FETCH_DIM_R/81            $89=      16?1                 118:'create_mag'    	;0
172 98   BOOL_NOT/13               #90=      $89                  ?0                  	;0
173 98   JMPZ/43                   ?0        #90                  ?175                	;0	>>175
174 99   GOTO/253                  ?0        ?68                  ?119                	;0
175 101  GOTO/253                  ?0        ?192                 ?120                	;0	<<173
176 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'count'         	;1	<<0
177 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'get_included_files'	;0
178 103  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
179 103  SEND_VAR_NO_REF_EX/50     ?80       $91                  ?1                  	;0
180 103  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
181 103  IS_EQUAL/17               #93=      $92                  125:1               	;0
182 103  BOOL_NOT/13               #94=      #93                  ?0                  	;0
183 103  JMPZ/43                   ?0        #94                  ?185                	;0	>>185
184 104  GOTO/253                  ?0        ?186                 ?126                	;0
185 106  EXIT/79                   ?0        ?0                   ?0                  	;0	<<183
186 108  FETCH_DIM_R/81            $95=      16?1                 127:'reseller_client_connection_logs'	;0
187 108  BOOL_NOT/13               #96=      $95                  ?0                  	;0
188 108  JMPZ/43                   ?0        #96                  ?190                	;0	>>190
189 109  GOTO/253                  ?0        ?34                  ?128                	;0
190 111  ECHO/40                   ?0        129:'<div class="modal fade bs-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="streamViewLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable" class="table table-striped table-borderless mb-0" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Server</th>
                            <th>Clients</th>
                            <th>Uptime</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center">Loading information...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-live-modal-center" tabindex="-1" role="dialog" aria-labelledby="liveViewLabel" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <table id="datatable-live" class="table table-striped table-borderless mb-0" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Quality</th>
                            <th>Line</th>
                            <th>Stream</th>
                            <th>Player</th>
                            <th>ISP</th>
                            <th class="text-center">IP</th>
                            <th class="text-center">Duration</th>
                            <th class="text-center">Output</th>
                            <th class="text-center">Kill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10" class="text-center">Loading live connections...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
' ?0                  	;0	<<188
191 112  GOTO/253                  ?0        ?34                  ?130                	;0
192 114  ECHO/40                   ?0        131:'<div class="modal fade messageModal" role="dialog" aria-labelledby="messageModal" aria-hidden="true" style="display: none;" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="messageModal">' ?0                  	;0
193 115  FETCH_DIM_R/81            $97=      16?0                 132:'mag_event'     	;0
194 115  ECHO/40                   ?0        $97                  ?0                  	;0
195 116  ECHO/40                   ?0        133:'</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <select id="message_type" class="form-control" data-toggle="select2" >
                        <option value="" selected>' ?0                  	;0
196 117  FETCH_DIM_R/81            $98=      16?0                 134:'select_an_event'	;0
197 117  ECHO/40                   ?0        $98                  ?0                  	;0
198 118  ECHO/40                   ?0        135:':</option>
                        <optgroup label="">
                            ' ?0                  	;0
199 119  GOTO/253                  ?0        ?71                  ?136                	;0
200 121  ECHO/40                   ?0        137:'                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-programme" tabindex="-1" role="dialog" aria-labelledby="programmeLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="programmeLabel"></span> &nbsp;<small><span id="programmeStart"></span></small></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p class="sub-header" id="programmeDescription"></p>
            </div>
        </div>
    </div>
</div>' ?0                  	;0
201 122  NOP/0                     ?0        138:1                ?0                  	;4294967295
*/

?>