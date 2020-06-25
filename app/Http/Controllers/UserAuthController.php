<?php


namespace App\Http\Controllers;


use App\Cores\Services\IUserAuthService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * Class UserAuthController
 * @package App\Http\Controllers
 */
class UserAuthController extends Controller
{
    /**
     * @var IUserAuthService
     */
    private IUserAuthService $userAuthService;

    /**
     * UserAuthController constructor.
     * @param IUserAuthService $userAuthService
     */
    public function __construct(IUserAuthService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }

    /**
     * @param Request $request
     * @return Exception|JsonResponse|ValidationException
     */
    public function register(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|max:18|min:3'
            ]);
        } catch (ValidationException $e) {
            return $e;
        }
        return response()->json([
            'data' => $this->userAuthService->register($request->all())
        ], 201);
    }

}
