import ResponsiveNavLink from "@/Components/ResponsiveNavLink";
import Sidebar from "@/Layouts/Sidebar";
import { ChevronDownIcon, HamburgerIcon, CloseIcon } from "@chakra-ui/icons";
import {
    Box,
    HStack,
    Icon,
    Image,
    Menu,
    MenuButton,
    MenuList,
    MenuItem,
    Button,
    Text,
    VStack,
    Card,
    CardHeader,
    CardBody,
    Avatar,
    CardFooter,
    Flex,
    Spacer,
} from "@chakra-ui/react";
import { Head, Link } from "@inertiajs/react";
import React, { useState, useEffect } from "react";
import Calendar from "react-calendar";
import "react-calendar/dist/Calendar.css";
import { FaCalendar, FaUserLarge } from "react-icons/fa6";
import { RiLogoutBoxRFill } from "react-icons/ri";

export default function Dashboard(props) {
    // プロップスから値を取得
    const { title, metaDescription, userName, shopName } = props;
    // サイドバーの表示状態
    const [showSidebar, setShowSidebar] = useState(false);
    // カレンダーの表示状態
    const [showCalendar, setShowCalendar] = useState(false); // 表示状態（初期値は非表示）
    const [calendarValue, setCalendarValue] = useState(new Date()); // 初期値の設定

    // サイドバーの表示切り替え
    const toggleSidebar = () => {
        setShowSidebar(!showSidebar);
    };

    // ハンバーガーメニューの表示切り替え
    useEffect(() => {
        const handleResize = () => {
            if (window.innerWidth >= 768) {
                setShowSidebar(false);
            }
        };
        window.addEventListener("resize", handleResize); // イベントリスナーの登録
        return () => {
            window.removeEventListener("resize", handleResize); // イベントリスナーの解除
        };
    }, []);

    //　カレンダーの情報を取得
    const getCalendarInfo = (value, event) => {
        console.log(value, event);
    };

    return (
        <>
            {/* Head要素 */}
            <Head title={title}>
                <meta charSet="UTF-8" />
                <meta
                    name="viewport"
                    content="width=device-width, initial-scale=1.0"
                />
                <meta name="description" content={metaDescription} />
                <meta name="robots" content="index,follow" />
            </Head>

            {/* ヘッダー */}
            <Box as="header">
                <HStack
                    justifyContent={"space-between"}
                    alignItems={"center"}
                    p={{ base: 2 }}
                    mr={{ base: 2, md: 4 }}
                    bgGradient="linear(to-t,blue.100,blue.200,blue.400)"
                    borderRadius={"md"}
                    boxShadow={"xl"}
                    w={"100%"}
                >
                    <Link href="/dashboard">
                        <Image
                            src="img/bbIcon.png"
                            alt="BistroBucks Icon"
                            ml={{ md: 4 }}
                            boxSize={{ base: "60px" }}
                            borderRadius="xl"
                            _hover={{ opacity: 0.8 }}
                        />
                    </Link>
                    {/* バーガーメニュー */}
                    <Box>
                        <HamburgerIcon
                            boxSize={8}
                            display={{ base: "block", md: "none" }}
                            _hover={{ cursor: "pointer" }}
                            onClick={toggleSidebar}
                            color={"white"}
                        />
                    </Box>
                    {/* ユーザーメニュー */}
                    <Menu>
                        <MenuButton
                            as={Button}
                            rightIcon={<ChevronDownIcon />}
                            boxShadow={"outline"}
                            bgColor={"white"}
                        >
                            <Box display={{ base: "block", md: "none" }}>
                                <Avatar
                                    size="sm"
                                    color={"white"}
                                    bg={"gray.400"}
                                    name={userName ? userName : ""}
                                />
                            </Box>
                            <Box display={{ base: "none", md: "block" }}>
                                <Text>{userName ? userName : "No name"}</Text>
                            </Box>
                        </MenuButton>

                        <MenuList>
                            <VStack alignItems={"left"}>
                                <MenuItem as="a" href={route("profile.edit")}>
                                    <HStack>
                                        <Icon as={FaUserLarge} boxSize={4} />
                                        <Text>プロフィール</Text>
                                    </HStack>
                                </MenuItem>
                                <MenuItem
                                    as="button"
                                    onClick={() => {
                                        Inertia.post(route("logout"));
                                    }}
                                >
                                    <HStack>
                                        <Icon
                                            as={RiLogoutBoxRFill}
                                            boxSize={4}
                                        />
                                        <Text>ログアウト</Text>
                                    </HStack>
                                </MenuItem>
                            </VStack>
                        </MenuList>
                    </Menu>
                </HStack>
            </Box>
            {/* サイドバー（スマホ用） */}
            {showSidebar && (
                <>
                    {/* オーバーレイ */}
                    <Box
                        position="absolute"
                        top="0"
                        left="0"
                        width="100%"
                        height="100vh"
                        bg="rgba(0, 0, 0, 0.5)"
                        zIndex="9"
                        onClick={toggleSidebar}
                    />
                    {/* サイドバー */}
                    <Box
                        position="absolute"
                        width="100%"
                        height="100vh"
                        top={10}
                        zIndex="10"
                    >
                        <VStack>
                            <Box width="80%" position="relative">
                                <CloseIcon
                                    position="absolute"
                                    top={5}
                                    right={5}
                                    alignItems={"center"}
                                    boxSize={6}
                                    _hover={{ cursor: "pointer" }}
                                    onClick={toggleSidebar}
                                />
                                {/* サイドバーの中身 */}
                                <Box>
                                    <Sidebar />
                                </Box>
                            </Box>
                        </VStack>
                    </Box>
                </>
            )}
            {/* サイドバー（PC用） */}
            <Box display={{ base: "none", md: "block" }} width="16%">
                <Sidebar />
            </Box>

            {/* メインコンテンツ */}
            <VStack m={5}>
                <Flex width="100%">
                    <Box>
                        <Card variant="elevated">
                            <HStack>
                                <CardHeader
                                    fontWeight="bold"
                                    onClick={getCalendarInfo}
                                >
                                    <Icon
                                        as={FaCalendar}
                                        boxSize={5}
                                        onClick={() =>
                                            setShowCalendar(!showCalendar)
                                        }
                                        _hover={{
                                            cursor: "pointer",
                                            color: "gray.400",
                                        }}
                                    />
                                </CardHeader>
                                <CardBody>
                                    {calendarValue.toLocaleDateString()}
                                </CardBody>
                            </HStack>
                        </Card>
                    </Box>
                    <Spacer />
                    <Box>
                        <Card variant="elevated" fontSize="md">
                            <HStack>
                                <CardHeader fontWeight="bold">
                                    店舗名
                                </CardHeader>
                                <CardBody>{shopName}</CardBody>
                            </HStack>
                        </Card>
                    </Box>
                </Flex>
                {/* カレンダー表示 */}
                {showCalendar && (
                    <>
                        <Box
                            position="absolute"
                            top="0"
                            left=""
                            width="100%"
                            height="100vh"
                            bg="rgba(0, 0, 0, 0.5)"
                            zIndex="9"
                            onClick={() => setShowCalendar(!showCalendar)}
                        />
                        <Box zIndex="10">
                            <Calendar
                                value={calendarValue}
                                onChange={(value) => {
                                    setCalendarValue(value);
                                    setShowCalendar(false);
                                }}
                            />
                        </Box>
                    </>
                )}
                <Card variant="elevated">
                    
                </Card>
            </VStack>
        </>
    );
}
