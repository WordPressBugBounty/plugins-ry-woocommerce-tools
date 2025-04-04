<?php

function rywt_bank_code_to_name($bank_code)
{
    static $bank_name = [];
    if (empty($bank_name)) {
        $bank_name = [
            '004' => _x('004', 'Bank code', 'ry-woocommerce-tools'), // 臺灣銀行
            '005' => _x('005', 'Bank code', 'ry-woocommerce-tools'), // 臺灣土地銀行
            '006' => _x('006', 'Bank code', 'ry-woocommerce-tools'), // 合作金庫商業銀行
            '007' => _x('007', 'Bank code', 'ry-woocommerce-tools'), // 第一商業銀行
            '008' => _x('008', 'Bank code', 'ry-woocommerce-tools'), // 華南商業銀行
            '009' => _x('009', 'Bank code', 'ry-woocommerce-tools'), // 彰化商業銀行
            '011' => _x('011', 'Bank code', 'ry-woocommerce-tools'), // 上海商業儲蓄銀行
            '012' => _x('012', 'Bank code', 'ry-woocommerce-tools'), // 台北富邦商業銀行
            '013' => _x('013', 'Bank code', 'ry-woocommerce-tools'), // 國泰世華商業銀行
            '015' => _x('015', 'Bank code', 'ry-woocommerce-tools'), // 中國輸出入銀行
            '016' => _x('016', 'Bank code', 'ry-woocommerce-tools'), // 高雄銀行
            '017' => _x('017', 'Bank code', 'ry-woocommerce-tools'), // 兆豐國際商業銀行
            '021' => _x('021', 'Bank code', 'ry-woocommerce-tools'), // 花旗(台灣)商業銀行
            '048' => _x('048', 'Bank code', 'ry-woocommerce-tools'), // 王道商業銀行
            '050' => _x('050', 'Bank code', 'ry-woocommerce-tools'), // 臺灣中小企業銀行
            '052' => _x('052', 'Bank code', 'ry-woocommerce-tools'), // 渣打國際商業銀行
            '053' => _x('053', 'Bank code', 'ry-woocommerce-tools'), // 台中商業銀行
            '054' => _x('054', 'Bank code', 'ry-woocommerce-tools'), // 京城商業銀行
            '081' => _x('081', 'Bank code', 'ry-woocommerce-tools'), // 滙豐(台灣)商業銀行
            '101' => _x('101', 'Bank code', 'ry-woocommerce-tools'), // 瑞興商業銀行
            '102' => _x('102', 'Bank code', 'ry-woocommerce-tools'), // 華泰商業銀行
            '103' => _x('103', 'Bank code', 'ry-woocommerce-tools'), // 臺灣新光商業銀行
            '108' => _x('108', 'Bank code', 'ry-woocommerce-tools'), // 陽信商業銀行
            '118' => _x('118', 'Bank code', 'ry-woocommerce-tools'), // 板信商業銀行
            '147' => _x('147', 'Bank code', 'ry-woocommerce-tools'), // 三信商業銀行
            '803' => _x('803', 'Bank code', 'ry-woocommerce-tools'), // 聯邦商業銀行
            '805' => _x('805', 'Bank code', 'ry-woocommerce-tools'), // 遠東國際商業銀行
            '806' => _x('806', 'Bank code', 'ry-woocommerce-tools'), // 元大商業銀行
            '807' => _x('807', 'Bank code', 'ry-woocommerce-tools'), // 永豐商業銀行
            '808' => _x('808', 'Bank code', 'ry-woocommerce-tools'), // 玉山商業銀行
            '809' => _x('809', 'Bank code', 'ry-woocommerce-tools'), // 凱基商業銀行
            '810' => _x('810', 'Bank code', 'ry-woocommerce-tools'), // 星展(台灣)商業銀行
            '812' => _x('812', 'Bank code', 'ry-woocommerce-tools'), // 台新國際商業銀行
            '816' => _x('816', 'Bank code', 'ry-woocommerce-tools'), // 安泰商業銀行
            '822' => _x('822', 'Bank code', 'ry-woocommerce-tools'), // 中國信託商業銀行
            '823' => _x('823', 'Bank code', 'ry-woocommerce-tools'), // 將來商業銀行
            '824' => _x('824', 'Bank code', 'ry-woocommerce-tools'), // 連線商業銀行
            '826' => _x('826', 'Bank code', 'ry-woocommerce-tools'), // 樂天國際商業銀行
            '020' => _x('020', 'Bank code', 'ry-woocommerce-tools'), // 日商瑞穗銀行
            '022' => _x('022', 'Bank code', 'ry-woocommerce-tools'), // 美商美國銀行
            '023' => _x('023', 'Bank code', 'ry-woocommerce-tools'), // 泰國盤谷銀行
            '025' => _x('025', 'Bank code', 'ry-woocommerce-tools'), // 菲商菲律賓首都銀行
            '028' => _x('028', 'Bank code', 'ry-woocommerce-tools'), // 美商美國紐約梅隆銀行
            '029' => _x('029', 'Bank code', 'ry-woocommerce-tools'), // 新加坡商大華銀行
            '030' => _x('030', 'Bank code', 'ry-woocommerce-tools'), // 美商道富銀行
            '037' => _x('037', 'Bank code', 'ry-woocommerce-tools'), // 法商法國興業銀行
            '039' => _x('039', 'Bank code', 'ry-woocommerce-tools'), // 澳商澳盛銀行
            '072' => _x('072', 'Bank code', 'ry-woocommerce-tools'), // 德商德意志銀行
            '075' => _x('075', 'Bank code', 'ry-woocommerce-tools'), // 香港商東亞銀行
            '076' => _x('076', 'Bank code', 'ry-woocommerce-tools'), // 美商摩根大通銀行
            '078' => _x('078', 'Bank code', 'ry-woocommerce-tools'), // 新加坡商星展銀行
            '082' => _x('082', 'Bank code', 'ry-woocommerce-tools'), // 法商法國巴黎銀行
            '083' => _x('083', 'Bank code', 'ry-woocommerce-tools'), // 英商渣打銀行
            '085' => _x('085', 'Bank code', 'ry-woocommerce-tools'), // 新加坡商新加坡華僑銀行
            '086' => _x('086', 'Bank code', 'ry-woocommerce-tools'), // 法商東方匯理銀行
            '092' => _x('092', 'Bank code', 'ry-woocommerce-tools'), // 瑞士商瑞士銀行
            '093' => _x('093', 'Bank code', 'ry-woocommerce-tools'), // 荷蘭商安智銀行
            '097' => _x('097', 'Bank code', 'ry-woocommerce-tools'), // 美商富國銀行
            '098' => _x('098', 'Bank code', 'ry-woocommerce-tools'), // 日商三菱日聯銀行
            '321' => _x('321', 'Bank code', 'ry-woocommerce-tools'), // 日商三井住友銀行
            '324' => _x('324', 'Bank code', 'ry-woocommerce-tools'), // 美商花旗銀行
            '325' => _x('325', 'Bank code', 'ry-woocommerce-tools'), // 香港商香港上海滙豐銀行
            '326' => _x('326', 'Bank code', 'ry-woocommerce-tools'), // 西班牙商西班牙對外銀行
            '328' => _x('328', 'Bank code', 'ry-woocommerce-tools'), // 法商法國外貿銀行
            '329' => _x('329', 'Bank code', 'ry-woocommerce-tools'), // 印尼商印尼人民銀行
            '330' => _x('330', 'Bank code', 'ry-woocommerce-tools'), // 韓商韓亞銀行
            '104' => _x('104', 'Bank code', 'ry-woocommerce-tools'), // 台北市第五信用合作社
            '114' => _x('114', 'Bank code', 'ry-woocommerce-tools'), // 基隆第一信用合作社
            '115' => _x('115', 'Bank code', 'ry-woocommerce-tools'), // 基隆市第二信用合作社
            '119' => _x('119', 'Bank code', 'ry-woocommerce-tools'), // 淡水第一信用合作社
            '120' => _x('120', 'Bank code', 'ry-woocommerce-tools'), // 新北市淡水信用合作社
            '124' => _x('124', 'Bank code', 'ry-woocommerce-tools'), // 宜蘭信用合作社
            '127' => _x('127', 'Bank code', 'ry-woocommerce-tools'), // 桃園信用合作社
            '130' => _x('130', 'Bank code', 'ry-woocommerce-tools'), // 新竹第一信用合作社
            '132' => _x('132', 'Bank code', 'ry-woocommerce-tools'), // 新竹第三信用合作社
            '146' => _x('146', 'Bank code', 'ry-woocommerce-tools'), // 台中市第二信用合作社
            '158' => _x('158', 'Bank code', 'ry-woocommerce-tools'), // 彰化第一信用合作社
            '161' => _x('161', 'Bank code', 'ry-woocommerce-tools'), // 彰化第五信用合作社
            '162' => _x('162', 'Bank code', 'ry-woocommerce-tools'), // 彰化第六信用合作社
            '163' => _x('163', 'Bank code', 'ry-woocommerce-tools'), // 彰化第十信用合作社
            '165' => _x('165', 'Bank code', 'ry-woocommerce-tools'), // 彰化縣鹿港信用合作社
            '178' => _x('178', 'Bank code', 'ry-woocommerce-tools'), // 嘉義市第三信用合作社
            '188' => _x('188', 'Bank code', 'ry-woocommerce-tools'), // 臺南第三信用合作社
            '204' => _x('204', 'Bank code', 'ry-woocommerce-tools'), // 高雄市第三信用合作社
            '215' => _x('215', 'Bank code', 'ry-woocommerce-tools'), // 花蓮第一信用合作社
            '216' => _x('216', 'Bank code', 'ry-woocommerce-tools'), // 花蓮第二信用合作社
            '222' => _x('222', 'Bank code', 'ry-woocommerce-tools'), // 澎湖縣第一信用合作社
            '223' => _x('223', 'Bank code', 'ry-woocommerce-tools'), // 澎湖第二信用合作社
            '224' => _x('224', 'Bank code', 'ry-woocommerce-tools'), // 金門縣信用合作社
        ];
    }

    return $bank_name[$bank_code] ?? $bank_code;
}

function rywt_ecpay_info_to_name($info)
{
    static $info_name = [];
    if (empty($info_name)) {
        $info_name = [
            'WebATM_TAISHIN' => _x('WebATM_TAISHIN', 'ecpay info', 'ry-woocommerce-tools'), // 台新銀行 WebATM
            'WebATM_ESUN' => _x('WebATM_ESUN', 'ecpay info', 'ry-woocommerce-tools'), // 玉山銀行 WebATM
            'WebATM_BOT' => _x('WebATM_BOT', 'ecpay info', 'ry-woocommerce-tools'), // 台灣銀行 WebATM
            'WebATM_FUBON' => _x('WebATM_FUBON', 'ecpay info', 'ry-woocommerce-tools'), // 台北富邦 WebATM
            'WebATM_CHINATRUST' => _x('WebATM_CHINATRUST', 'ecpay info', 'ry-woocommerce-tools'), // 中國信託 WebATM
            'WebATM_FIRST' => _x('WebATM_FIRST', 'ecpay info', 'ry-woocommerce-tools'), // 第一銀行 WebATM
            'WebATM_CATHAY' => _x('WebATM_CATHAY', 'ecpay info', 'ry-woocommerce-tools'), // 國泰世華 WebATM
            'WebATM_MEGA' => _x('WebATM_MEGA', 'ecpay info', 'ry-woocommerce-tools'), // 兆豐銀行 WebATM
            'WebATM_LAND' => _x('WebATM_LAND', 'ecpay info', 'ry-woocommerce-tools'), // 土地銀行 WebATM
            'WebATM_TACHONG' => _x('WebATM_TACHONG', 'ecpay info', 'ry-woocommerce-tools'), // 大眾銀行 WebATM
            'WebATM_SINOPAC' => _x('WebATM_SINOPAC', 'ecpay info', 'ry-woocommerce-tools'), // 永豐銀行 WebATM
            'ATM_TAISHIN' => _x('ATM_TAISHIN', 'ecpay info', 'ry-woocommerce-tools'), // 台新銀行 ATM
            'ATM_ESUN' => _x('ATM_ESUN', 'ecpay info', 'ry-woocommerce-tools'), // 玉山銀行 ATM
            'ATM_BOT' => _x('ATM_BOT', 'ecpay info', 'ry-woocommerce-tools'), // 台灣銀行 ATM
            'ATM_FUBON' => _x('ATM_FUBON', 'ecpay info', 'ry-woocommerce-tools'), // 台北富邦 ATM
            'ATM_CHINATRUST' => _x('ATM_CHINATRUST', 'ecpay info', 'ry-woocommerce-tools'), // 中國信託 ATM
            'ATM_FIRST' => _x('ATM_FIRST', 'ecpay info', 'ry-woocommerce-tools'), // 第一銀行 ATM
            'ATM_LAND' => _x('ATM_LAND', 'ecpay info', 'ry-woocommerce-tools'), // 土地銀行 ATM
            'ATM_CATHAY' => _x('ATM_CATHAY', 'ecpay info', 'ry-woocommerce-tools'), // 國泰世華銀行 ATM
            'ATM_TACHONG' => _x('ATM_TACHONG', 'ecpay info', 'ry-woocommerce-tools'), // 大眾銀行 ATM
            'ATM_PANHSIN' => _x('ATM_PANHSIN', 'ecpay info', 'ry-woocommerce-tools'), // 板信銀行 ATM
            'CVS_CVS' => _x('CVS_CVS', 'ecpay info', 'ry-woocommerce-tools'), // 超商代碼繳款
            'CVS_OK' => _x('CVS_OK', 'ecpay info', 'ry-woocommerce-tools'), // OK 超商代碼繳款
            'CVS_FAMILY' => _x('CVS_FAMILY', 'ecpay info', 'ry-woocommerce-tools'), // 全家超商代碼繳款
            'CVS_HILIFE' => _x('CVS_HILIFE', 'ecpay info', 'ry-woocommerce-tools'), // 萊爾富超商代碼繳款
            'CVS_IBON' => _x('CVS_IBON', 'ecpay info', 'ry-woocommerce-tools'), // 7-11 ibon 代碼繳款
            'BARCODE_BARCODE' => _x('BARCODE_BARCODE', 'ecpay info', 'ry-woocommerce-tools'), // 超商條碼繳款
            'Credit_CreditCard' => _x('Credit_CreditCard', 'ecpay info', 'ry-woocommerce-tools'), // 信用卡
            'Flexible_Installment' => _x('Flexible_Installment', 'ecpay info', 'ry-woocommerce-tools'), // 圓夢彈性分期
            'TWQR_OPAY' => _x('TWQR_OPAY', 'ecpay info', 'ry-woocommerce-tools'), // 歐付寶TWQR 行動支付
            'BNPL_URICH' => _x('BNPL_URICH', 'ecpay info', 'ry-woocommerce-tools'), // 裕富數位無卡分期

            'family' => _x('family', 'ecpay info', 'ry-woocommerce-tools'), // 全家
            'hilife' => _x('hilife', 'ecpay info', 'ry-woocommerce-tools'), // 萊爾富
            'okmart' => _x('okmart', 'ecpay info', 'ry-woocommerce-tools'), // OK超商
            'ibon' => _x('ibon', 'ecpay info', 'ry-woocommerce-tools'), // 7-11

            'shipping-CVS_FAMI' => _x('CVS_FAMI', 'ecpay shipping info', 'ry-woocommerce-tools'), // 全家物流(B2C)',
            'shipping-CVS_UNIMART' => _x('CVS_UNIMART', 'ecpay shipping info', 'ry-woocommerce-tools'), // 7-ELEVEN超商物流(B2C)',
            'shipping-CVS_UNIMARTFREEZE' => _x('CVS_UNIMARTFREEZE', 'ecpay shipping info', 'ry-woocommerce-tools'), // 7-ELEVEN冷凍店取(B2C)',
            'shipping-CVS_FAMIC2C' => _x('CVS_FAMIC2C', 'ecpay shipping info', 'ry-woocommerce-tools'), // 全家物流(C2C)',
            'shipping-CVS_UNIMARTC2C' => _x('CVS_UNIMARTC2C', 'ecpay shipping info', 'ry-woocommerce-tools'), // 7-ELEVEN超商物流(C2C)',
            'shipping-CVS_HILIFE' => _x('CVS_HILIFE', 'ecpay shipping info', 'ry-woocommerce-tools'), // 萊爾富物流(B2C)',
            'shipping-CVS_HILIFEC2C' => _x('CVS_HILIFEC2C', 'ecpay shipping info', 'ry-woocommerce-tools'), // 萊爾富物流(C2C)',
            'shipping-CVS_OKMARTC2C' => _x('CVS_OKMARTC2C', 'ecpay shipping info', 'ry-woocommerce-tools'), // OK超商(C2C)',
            'shipping-HOME_TCAT' => _x('HOME_TCAT', 'ecpay shipping info', 'ry-woocommerce-tools'), // 黑貓物流',
            'shipping-HOME_POST' => _x('HOME_POST', 'ecpay shipping info', 'ry-woocommerce-tools'), // 中華郵政',

            'status-300' => _x('300', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單處理中(綠界已收到訂單資料)
            'status-310' => _x('310', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單上傳物流中
            'status-311' => _x('311', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單傳送物流成功
            'status-320' => _x('320', 'ecpay status info', 'ry-woocommerce-tools'), // 郵局已確認資料，可列印
            'status-325' => _x('325', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨訂單處理中(綠界已收到訂單資料)
            'status-2000' => _x('2000', 'ecpay status info', 'ry-woocommerce-tools'), // 已申請門市變更
            'status-2001' => _x('2001', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單傳送超商成功
            'status-2002' => _x('2002', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨單號不合規則
            'status-2003' => _x('2003', 'ecpay status info', 'ry-woocommerce-tools'), // XML檔內出貨單號重複
            'status-2004' => _x('2004', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨單號重複上傳使用(驗收時發現)
            'status-2005' => _x('2005', 'ecpay status info', 'ry-woocommerce-tools'), // 日期格式不符
            'status-2006' => _x('2006', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單金額或代收金額錯誤
            'status-2007' => _x('2007', 'ecpay status info', 'ry-woocommerce-tools'), // 商品類型為空
            'status-2008' => _x('2008', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單為空
            'status-2009' => _x('2009', 'ecpay status info', 'ry-woocommerce-tools'), // 門市店號為空
            'status-2010' => _x('2010', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨日期為空
            'status-2011' => _x('2011', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨金額為空
            'status-2012' => _x('2012', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨編號不存在
            'status-2013' => _x('2013', 'ecpay status info', 'ry-woocommerce-tools'), // 母廠商不存在
            'status-2014' => _x('2014', 'ecpay status info', 'ry-woocommerce-tools'), // 子廠商不存在
            'status-2015' => _x('2015', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨編號已存在(單筆)
            'status-2016' => _x('2016', 'ecpay status info', 'ry-woocommerce-tools'), // 門市已關轉店，將進行退貨處理
            'status-2017' => _x('2017', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨日期不符合規定
            'status-2018' => _x('2018', 'ecpay status info', 'ry-woocommerce-tools'), // 服務類型不符規定(如只開取貨付款服務，卻使用純取貨服務)
            'status-2019' => _x('2019', 'ecpay status info', 'ry-woocommerce-tools'), // 商品類型不符規定
            'status-2020' => _x('2020', 'ecpay status info', 'ry-woocommerce-tools'), // 廠商尚未申請店配服務
            'status-2021' => _x('2021', 'ecpay status info', 'ry-woocommerce-tools'), // 同一批次出貨編號重複(批次)
            'status-2022' => _x('2022', 'ecpay status info', 'ry-woocommerce-tools'), // 出貨金額不符規定
            'status-2023' => _x('2023', 'ecpay status info', 'ry-woocommerce-tools'), // 取貨人姓名為空
            'status-2024' => _x('2024', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單傳送超商成功
            'status-2025' => _x('2025', 'ecpay status info', 'ry-woocommerce-tools'), // 門市轉店號(舊門市店號已更新)
            'status-2026' => _x('2026', 'ecpay status info', 'ry-woocommerce-tools'), // 無此門市，將進行退貨處理
            'status-2027' => _x('2027', 'ecpay status info', 'ry-woocommerce-tools'), // 門市指定時間不配送，後續配送中
            'status-2028' => _x('2028', 'ecpay status info', 'ry-woocommerce-tools'), // 門市關轉店，3日內未更新SUP(新店號)便至退貨流程
            'status-2029' => _x('2029', 'ecpay status info', 'ry-woocommerce-tools'), // 門市尚未開店
            'status-2030' => _x('2030', 'ecpay status info', 'ry-woocommerce-tools'), // 物流中心驗收成功
            'status-2031' => _x('2031', 'ecpay status info', 'ry-woocommerce-tools'), // 等待賣家出貨
            'status-2032' => _x('2032', 'ecpay status info', 'ry-woocommerce-tools'), // 包裝異常，請洽客服
            'status-2033' => _x('2033', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹超材，退回賣家
            'status-2034' => _x('2034', 'ecpay status info', 'ry-woocommerce-tools'), // 違禁品(退貨及罰款處理)
            'status-2035' => _x('2035', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單資料重複上傳
            'status-2036' => _x('2036', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單超過驗收期限(賣家未出貨)
            'status-2037' => _x('2037', 'ecpay status info', 'ry-woocommerce-tools'), // 取件門市關轉，請重選門市
            'status-2038' => _x('2038', 'ecpay status info', 'ry-woocommerce-tools'), // 標籤錯誤，廠退處理
            'status-2039' => _x('2039', 'ecpay status info', 'ry-woocommerce-tools'), // 標籤錯誤，廠退處理
            'status-2040' => _x('2040', 'ecpay status info', 'ry-woocommerce-tools'), // 標籤錯誤，廠退處理
            'status-2041' => _x('2041', 'ecpay status info', 'ry-woocommerce-tools'), // 物流中心理貨中
            'status-2042' => _x('2042', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-2043' => _x('2043', 'ecpay status info', 'ry-woocommerce-tools'), // 門市指定時間不配送，後續配送中
            'status-2044' => _x('2044', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家已取退回包裹
            'status-2045' => _x('2045', 'ecpay status info', 'ry-woocommerce-tools'), // 不正常到貨(商品提早到物流中心)，廠退處理
            'status-2046' => _x('2046', 'ecpay status info', 'ry-woocommerce-tools'), // 貨件未取退回大智通物流中心
            'status-2047' => _x('2047', 'ecpay status info', 'ry-woocommerce-tools'), // 正常二退(退貨時間延長，在判賠期限內退回)
            'status-2048' => _x('2048', 'ecpay status info', 'ry-woocommerce-tools'), // 包裝異常，請洽客服
            'status-2049' => _x('2049', 'ecpay status info', 'ry-woocommerce-tools'), // 門市關店，將進行退貨處理
            'status-2050' => _x('2050', 'ecpay status info', 'ry-woocommerce-tools'), // 門市轉店，將進行退貨處理
            'status-2051' => _x('2051', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家要求提早退貨
            'status-2052' => _x('2052', 'ecpay status info', 'ry-woocommerce-tools'), // 違禁品(退貨及罰款處理)
            'status-2053' => _x('2053', 'ecpay status info', 'ry-woocommerce-tools'), // 門市刷A給B，請洽客服
            'status-2054' => _x('2054', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家要求提早退貨
            'status-2055' => _x('2055', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹退至物流中心
            'status-2057' => _x('2057', 'ecpay status info', 'ry-woocommerce-tools'), // 車輛故障，後續配送中
            'status-2058' => _x('2058', 'ecpay status info', 'ry-woocommerce-tools'), // 天候不佳，後續配送中
            'status-2059' => _x('2059', 'ecpay status info', 'ry-woocommerce-tools'), // 道路中斷，後續配送中
            'status-2060' => _x('2060', 'ecpay status info', 'ry-woocommerce-tools'), // 門市停業，廠退處理
            'status-2061' => _x('2061', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-2062' => _x('2062', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-2063' => _x('2063', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配達取件門市
            'status-2065' => _x('2065', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，將退回物流中心
            'status-2066' => _x('2066', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-2067' => _x('2067', 'ecpay status info', 'ry-woocommerce-tools'), // 買家已到店取貨
            'status-2068' => _x('2068', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家已到門市寄件
            'status-2069' => _x('2069', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨便收件(商品退回指定C門市)
            'status-2070' => _x('2070', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家已取退回包裹
            'status-2071' => _x('2071', 'ecpay status info', 'ry-woocommerce-tools'), // 門市代碼格式錯誤
            'status-2072' => _x('2072', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹已退至原寄件門市
            'status-2073' => _x('2073', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配達取件門市
            'status-2074' => _x('2074', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，將退回物流中心
            'status-2075' => _x('2075', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，將退回物流中心
            'status-2076' => _x('2076', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，已退回物流中心
            'status-2077' => _x('2077', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，待申請退回
            'status-2078' => _x('2078', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，已退回物流中心
            'status-2079' => _x('2079', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-商品瑕疵(進物流中心)
            'status-2080' => _x('2080', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-超材
            'status-2081' => _x('2081', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-違禁品(退貨及罰款處理)
            'status-2082' => _x('2082', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-訂單資料重複上傳
            'status-2083' => _x('2083', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-已過門市進貨日(未於指定時間內寄至物流中心)
            'status-2084' => _x('2084', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-第一段標籤規格錯誤
            'status-2085' => _x('2085', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-第一段標籤無法判讀
            'status-2086' => _x('2086', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-第一段標籤資料錯誤
            'status-2087' => _x('2087', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-物流中心理貨中
            'status-2088' => _x('2088', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取貨退回物流中心-商品遺失
            'status-2089' => _x('2089', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取退回物流中心-門市指定不配送(六、日)
            'status-2092' => _x('2092', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取退回物流中心-門市關轉
            'status-2093' => _x('2093', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取退回物流中心-爆量
            'status-2094' => _x('2094', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-2095' => _x('2095', 'ecpay status info', 'ry-woocommerce-tools'), // 天候路況不佳
            'status-2096' => _x('2096', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，待申請退回
            'status-2097' => _x('2097', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，宅配退回中
            'status-2101' => _x('2101', 'ecpay status info', 'ry-woocommerce-tools'), // 門市關轉店
            'status-2102' => _x('2102', 'ecpay status info', 'ry-woocommerce-tools'), // 門市舊店號更新
            'status-2103' => _x('2103', 'ecpay status info', 'ry-woocommerce-tools'), // 無取件門市資料
            'status-2104' => _x('2104', 'ecpay status info', 'ry-woocommerce-tools'), // 門市關轉，請重選門市
            'status-2105' => _x('2105', 'ecpay status info', 'ry-woocommerce-tools'), // 已申請門市變更
            'status-3001' => _x('3001', 'ecpay status info', 'ry-woocommerce-tools'), // 轉運中(即集貨)
            'status-3002' => _x('3002', 'ecpay status info', 'ry-woocommerce-tools'), // 不在家
            'status-3003' => _x('3003', 'ecpay status info', 'ry-woocommerce-tools'), // 配完
            'status-3004' => _x('3004', 'ecpay status info', 'ry-woocommerce-tools'), // 送錯BASE (送錯營業所)
            'status-3005' => _x('3005', 'ecpay status info', 'ry-woocommerce-tools'), // 送錯CENTER(送錯轉運中心)
            'status-3006' => _x('3006', 'ecpay status info', 'ry-woocommerce-tools'), // 配送中
            'status-3007' => _x('3007', 'ecpay status info', 'ry-woocommerce-tools'), // 公司行號休息
            'status-3008' => _x('3008', 'ecpay status info', 'ry-woocommerce-tools'), // 地址錯誤，聯繫收件人
            'status-3009' => _x('3009', 'ecpay status info', 'ry-woocommerce-tools'), // 搬家
            'status-3010' => _x('3010', 'ecpay status info', 'ry-woocommerce-tools'), // 轉寄(如原本寄到A，改寄B)
            'status-3011' => _x('3011', 'ecpay status info', 'ry-woocommerce-tools'), // 暫置營業所(收件人要求至營業所取貨)
            'status-3012' => _x('3012', 'ecpay status info', 'ry-woocommerce-tools'), // 到所(收件人要求到站所取件)
            'status-3013' => _x('3013', 'ecpay status info', 'ry-woocommerce-tools'), // 當配下車(當日配送A至B營業所，已抵達B營業所)
            'status-3014' => _x('3014', 'ecpay status info', 'ry-woocommerce-tools'), // 當配上車(當日配送從A至B營業所，已抵達A營業所)
            'status-3015' => _x('3015', 'ecpay status info', 'ry-woocommerce-tools'), // 空運配送中
            'status-3016' => _x('3016', 'ecpay status info', 'ry-woocommerce-tools'), // 配完狀態刪除
            'status-3017' => _x('3017', 'ecpay status info', 'ry-woocommerce-tools'), // 退回狀態刪除(代收退貨刪除)
            'status-3018' => _x('3018', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配達取件門市
            'status-3019' => _x('3019', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹已退至原寄件門市
            'status-3020' => _x('3020', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，將退回物流中心
            'status-3021' => _x('3021', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，待申請退回
            'status-3022' => _x('3022', 'ecpay status info', 'ry-woocommerce-tools'), // 買家已到店取貨
            'status-3023' => _x('3023', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家已取退回包裹
            'status-3024' => _x('3024', 'ecpay status info', 'ry-woocommerce-tools'), // 物流中心驗收成功
            'status-3025' => _x('3025', 'ecpay status info', 'ry-woocommerce-tools'), // 買家未取包裹，已退回物流中心
            'status-3029' => _x('3029', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹已配達指定取件門市
            'status-3031' => _x('3031', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹已退至指定寄件門市
            'status-3032' => _x('3032', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家已到門市寄件
            'status-3033' => _x('3033', 'ecpay status info', 'ry-woocommerce-tools'), // EC客戶要求提早退貨
            'status-3033' => _x('3033', 'ecpay status info', 'ry-woocommerce-tools'), // EC客戶要求提早退貨
            'status-3117' => _x('3117', 'ecpay status info', 'ry-woocommerce-tools'), // 拒收(調查處理中)
            'status-3118' => _x('3118', 'ecpay status info', 'ry-woocommerce-tools'), // 暫置營業所
            'status-3119' => _x('3119', 'ecpay status info', 'ry-woocommerce-tools'), // 暫置營業所(假日暫置)
            'status-3120' => _x('3120', 'ecpay status info', 'ry-woocommerce-tools'), // 預備配送中
            'status-3121' => _x('3121', 'ecpay status info', 'ry-woocommerce-tools'), // 轉交門市配達
            'status-3122' => _x('3122', 'ecpay status info', 'ry-woocommerce-tools'), // 另約時間
            'status-3301' => _x('3301', 'ecpay status info', 'ry-woocommerce-tools'), // 交寄郵件
            'status-3302' => _x('3302', 'ecpay status info', 'ry-woocommerce-tools'), // 各區郵局招領中
            'status-3303' => _x('3303', 'ecpay status info', 'ry-woocommerce-tools'), // 投遞不成功
            'status-3304' => _x('3304', 'ecpay status info', 'ry-woocommerce-tools'), // 依寄件人指示銷毀
            'status-3305' => _x('3305', 'ecpay status info', 'ry-woocommerce-tools'), // 拒收
            'status-3306' => _x('3306', 'ecpay status info', 'ry-woocommerce-tools'), // 退回投遞不成功
            'status-3307' => _x('3307', 'ecpay status info', 'ry-woocommerce-tools'), // i郵箱取件成功
            'status-3308' => _x('3308', 'ecpay status info', 'ry-woocommerce-tools'), // 投遞成功
            'status-3309' => _x('3309', 'ecpay status info', 'ry-woocommerce-tools'), // 投遞成功(收受人領取)
            'status-3310' => _x('3310', 'ecpay status info', 'ry-woocommerce-tools'), // 已退回寄件人
            'status-3311' => _x('3311', 'ecpay status info', 'ry-woocommerce-tools'), // 退回郵件投遞中
            'status-3312' => _x('3312', 'ecpay status info', 'ry-woocommerce-tools'), // 貨件投遞中
            'status-3313' => _x('3313', 'ecpay status info', 'ry-woocommerce-tools'), // 郵局貨件運轉中
            'status-3314' => _x('3314', 'ecpay status info', 'ry-woocommerce-tools'), // 到達i郵箱
            'status-3315' => _x('3315', 'ecpay status info', 'ry-woocommerce-tools'), // i郵箱逾期退招領
            'status-4001' => _x('4001', 'ecpay status info', 'ry-woocommerce-tools'), // 買家已到門市寄件
            'status-4002' => _x('4002', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨商品已至物流中心
            'status-4003' => _x('4003', 'ecpay status info', 'ry-woocommerce-tools'), // 退件包裹異常，協尋中
            'status-4004' => _x('4004', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-5001' => _x('5001', 'ecpay status info', 'ry-woocommerce-tools'), // 損壞，站所將協助退貨
            'status-5002' => _x('5002', 'ecpay status info', 'ry-woocommerce-tools'), // 遺失
            'status-5003' => _x('5003', 'ecpay status info', 'ry-woocommerce-tools'), // BASE列管(寄件人和收件人聯絡不到)
            'status-5004' => _x('5004', 'ecpay status info', 'ry-woocommerce-tools'), // 賣家未取包裹，待申請退回
            'status-5005' => _x('5005', 'ecpay status info', 'ry-woocommerce-tools'), // 代收退貨
            'status-5006' => _x('5006', 'ecpay status info', 'ry-woocommerce-tools'), // 代收毀損
            'status-5007' => _x('5007', 'ecpay status info', 'ry-woocommerce-tools'), // 代收遺失
            'status-5008' => _x('5008', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨配完
            'status-5009' => _x('5009', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-7001' => _x('7001', 'ecpay status info', 'ry-woocommerce-tools'), // 超大(通常發生於司機取件，不取件)
            'status-7002' => _x('7002', 'ecpay status info', 'ry-woocommerce-tools'), // 超重(通常發生於司機取件，不取件)
            'status-7003' => _x('7003', 'ecpay status info', 'ry-woocommerce-tools'), // 地址錯誤，聯繫收件人
            'status-7004' => _x('7004', 'ecpay status info', 'ry-woocommerce-tools'), // 航班延誤
            'status-7005' => _x('7005', 'ecpay status info', 'ry-woocommerce-tools'), // 託運單刪除
            'status-7006' => _x('7006', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-7007' => _x('7007', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-7008' => _x('7008', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹破損，請洽客服
            'status-7009' => _x('7009', 'ecpay status info', 'ry-woocommerce-tools'), // 包裝異常，請洽客服
            'status-7010' => _x('7010', 'ecpay status info', 'ry-woocommerce-tools'), // 包裝異常，
            'status-7011' => _x('7011', 'ecpay status info', 'ry-woocommerce-tools'), // 取件門市關轉，請重選門市
            'status-7012' => _x('7012', 'ecpay status info', 'ry-woocommerce-tools'), // 條碼錯誤，廠退處理
            'status-7013' => _x('7013', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單超過驗收期限(賣家未出貨)
            'status-7014' => _x('7014', 'ecpay status info', 'ry-woocommerce-tools'), // 等待賣家出貨
            'status-7015' => _x('7015', 'ecpay status info', 'ry-woocommerce-tools'), // 條碼重複，請洽客服
            'status-7016' => _x('7016', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹超材，退回賣家
            'status-7017' => _x('7017', 'ecpay status info', 'ry-woocommerce-tools'), // 取件包裹異常，協尋中
            'status-7018' => _x('7018', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-7019' => _x('7019', 'ecpay status info', 'ry-woocommerce-tools'), // 寄件包裹異常，協尋中
            'status-7020' => _x('7020', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹遺失，進入賠償程序
            'status-7021' => _x('7021', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-7022' => _x('7022', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-7023' => _x('7023', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹異常，請洽客服
            'status-7024' => _x('7024', 'ecpay status info', 'ry-woocommerce-tools'), // 另約時間
            'status-7025' => _x('7025', 'ecpay status info', 'ry-woocommerce-tools'), // 電聯不上
            'status-7026' => _x('7026', 'ecpay status info', 'ry-woocommerce-tools'), // 資料有誤
            'status-7027' => _x('7027', 'ecpay status info', 'ry-woocommerce-tools'), // 無件可退
            'status-7028' => _x('7028', 'ecpay status info', 'ry-woocommerce-tools'), // 超大超重
            'status-7029' => _x('7029', 'ecpay status info', 'ry-woocommerce-tools'), // 已回收
            'status-7030' => _x('7030', 'ecpay status info', 'ry-woocommerce-tools'), // 別家收走
            'status-7031' => _x('7031', 'ecpay status info', 'ry-woocommerce-tools'), // 商品未到
            'status-7032' => _x('7032', 'ecpay status info', 'ry-woocommerce-tools'), // 寄件門市關轉，請重選門市
            'status-7033' => _x('7033', 'ecpay status info', 'ry-woocommerce-tools'), // 資料異常
            'status-7034' => _x('7034', 'ecpay status info', 'ry-woocommerce-tools'), // 貨物進店發生異常，請洽客服
            'status-7035' => _x('7035', 'ecpay status info', 'ry-woocommerce-tools'), // 逾期未領，貨件銷毀
            'status-7036' => _x('7036', 'ecpay status info', 'ry-woocommerce-tools'), // 貨件破損，請洽客服
            'status-7037' => _x('7037', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單上傳失敗
            'status-7038' => _x('7038', 'ecpay status info', 'ry-woocommerce-tools'), // 門市驗收異常，請洽客服
            'status-7101' => _x('7101', 'ecpay status info', 'ry-woocommerce-tools'), // 取件門市關轉，請重選門市
            'status-7102' => _x('7102', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-無進貨資料
            'status-7103' => _x('7103', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-條碼錯誤
            'status-7104' => _x('7104', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-超材
            'status-7105' => _x('7105', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-大物流包裝不良(滲漏)
            'status-7106' => _x('7106', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-小物流破損
            'status-7107' => _x('7107', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹配送驗收異常-門市反應商品包裝不良(滲漏)
            'status-7201' => _x('7201', 'ecpay status info', 'ry-woocommerce-tools'), // 寄件門市關轉，請重選門市
            'status-7202' => _x('7202', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-無進貨資料
            'status-7203' => _x('7203', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-條碼錯誤
            'status-7204' => _x('7204', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-超材
            'status-7205' => _x('7205', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-大物流包裝不良(滲漏)
            'status-7206' => _x('7206', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-小物流破損
            'status-7207' => _x('7207', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨包裹配送驗收異常-門市反應商品包裝不良(滲漏)
            'status-7255' => _x('7255', 'ecpay status info', 'ry-woocommerce-tools'), // 包裹退至物流中心
            'status-7300' => _x('7300', 'ecpay status info', 'ry-woocommerce-tools'), // 郵局接收資料異常
            'status-7301' => _x('7301', 'ecpay status info', 'ry-woocommerce-tools'), // 郵件破損 - 無法投遞
            'status-7302' => _x('7302', 'ecpay status info', 'ry-woocommerce-tools'), // 郵件遺失
            'status-9001' => _x('9001', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨已取
            'status-9002' => _x('9002', 'ecpay status info', 'ry-woocommerce-tools'), // 退貨已取
            'status-9999' => _x('9999', 'ecpay status info', 'ry-woocommerce-tools'), // 訂單取消
        ];
    }

    return $info_name[$info] ?? $info;
}

function rywt_newebpay_info_to_name($info)
{
    static $info_name = [];
    if (empty($info_name)) {
        $info_name = [
            'CREDIT' => _x('CREDIT', 'newebpay info', 'ry-woocommerce-tools'), // 信用卡
            'VACC' => _x('VACC', 'newebpay info', 'ry-woocommerce-tools'), // 銀行 ATM 轉帳
            'WEBATM' => _x('WEBATM', 'newebpay info', 'ry-woocommerce-tools'), // 網路銀行轉帳
            'BARCODE' => _x('BARCODE', 'newebpay info', 'ry-woocommerce-tools'), // 超商條碼
            'CVS' => _x('CVS', 'newebpay info', 'ry-woocommerce-tools'), // 超商代碼繳
            'LINEPAY' => _x('LINEPAY', 'newebpay info', 'ry-woocommerce-tools'), // LINE Pay
            'ESUNWALLET' => _x('ESUNWALLET', 'newebpay info', 'ry-woocommerce-tools'), // 玉山 Wallet
            'TAIWANPAY' => _x('TAIWANPAY', 'newebpay info', 'ry-woocommerce-tools'), // 台灣 Pay
            'CVSCOM' => _x('CVSCOM', 'newebpay info', 'ry-woocommerce-tools'), // 超商取貨付款
            'FULA' => _x('FULA', 'newebpay info', 'ry-woocommerce-tools'), // Fula 付啦

            'type-CREDIT' => _x('CREDIT', 'newebpay type info', 'ry-woocommerce-tools'), // 台灣發卡機構核發之信用卡
            'type-FOREIGN' => _x('FOREIGN', 'newebpay type info', 'ry-woocommerce-tools'), // 國外發卡機構核發之卡
            'type-NTCB' => _x('NTCB', 'newebpay type info', 'ry-woocommerce-tools'), // 國民旅遊卡
            'type-UNIONPAY' => _x('UNIONPAY', 'newebpay type info', 'ry-woocommerce-tools'), // 銀聯卡
            'type-APPLEPAY' => _x('APPLEPAY', 'newebpay type info', 'ry-woocommerce-tools'), // ApplePay
            'type-GOOGLEPAY' => _x('GOOGLEPAY', 'newebpay type info', 'ry-woocommerce-tools'), // GooglePay
            'type-SAMSUNGPAY' => _x('SAMSUNGPAY', 'newebpay type info', 'ry-woocommerce-tools'), // SamsungPay
        ];
    }

    return $info_name[$info] ?? $info;
}
